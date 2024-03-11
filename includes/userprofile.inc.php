<?php

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $username = trim($_POST["username"]);

    try
    {
        require_once 'config.php';
        require_once 'dbh.inc.php';
        require_once 'userprofile_model.inc.php';
        require_once 'userprofile_controller.inc.php';

        $user_info = get_user_info($pdo);

        // Validation
        $errors = [];

        // Check for empty input validation
        if(is_input_empty($username))
        {
            $errors["empty_username"] = "Username cannot be empty.";
        }

        // Check username validation
        if(is_username_registered($pdo, $username))
        {
            $errors["username_taken"] = "Username has already been taken.";
        }

        if (isset($_FILES['thumbnail']) && $_FILES['thumbnail']['error'] === UPLOAD_ERR_OK) 
        {
                $thumbnailName = $_FILES['thumbnail']['name'];
                $thumbnailExtension = pathinfo($thumbnailName, PATHINFO_EXTENSION);
                $thumbnailSize = $_FILES['thumbnail']['size'];
                $thumbnailTmp = $_FILES['thumbnail']['tmp_name'];
                $thumbnailType = $_FILES['thumbnail']['type'];

                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (!in_array($thumbnailType, $allowedTypes)) {
                    $errors["thumbnail_wrong_format"] = "Only JPG, PNG, and GIF files are allowed.";
                }

                $maxSize = 5 * 1024 * 1024; // 5MB
                if ($thumbnailSize > $maxSize) {
                    $errors["thumbnail_exceeds_size"] = "File size exceeds the maximum limit (5MB).";
                }

                $image_relative_path = "../assets/images";

                $thumbnailPath =  $user_info["path"];
                
                if (file_exists($thumbnailPath))
                {
                    unlink($thumbnailPath);
                }
                
                $newThumnailFilename = DIRECTORY_SEPARATOR . $date_utc8 . '_' . $user_info["id"] . '.' . $thumbnailExtension;
                $thumbnailPath = $image_relative_path . $newThumnailFilename;

                if (!file_exists($image_relative_path)) {
                    mkdir($image_relative_path, 0777, true); // Creates the directory recursively
                }

                move_uploaded_file($thumbnailTmp, $thumbnailPath);
            }
            else
            {
                $newThumnailFilename = $user_info["path"];
            }

        require_once 'config.php';

        if($errors)
        {
            header("Location: ../userProfile.php?edit=failed");
            die();
        }

        edit_user($pdo, $username, $newThumnailFilename);

        header("Location: ../userProfile.php?edit=success");

        $pdo = null;
        $stmt = null;

        die();
    }
    catch(PDOException $e)
    {
        die("Query failed: " . $e->getMessage());
    }
}
else
{
    header("Location: ../userProfile.php?edit=failed");
    die();
}