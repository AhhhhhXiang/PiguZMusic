<?php

declare(strict_types=1);

function get_username(object $pdo, string $username)
{
    $query = "SELECT username FROM users WHERE username = :username AND `id` != :user_id;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":user_id", $_SESSION["user_id"]);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

// Read functions
function get_user_info(object $pdo)
{
    $query = "SELECT * FROM users WHERE id = :user_id;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":user_id", $_SESSION["user_id"]);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user($pdo, $username, $thumbnail_file)
{
    $id = $_SESSION["user_id"];

    $query = "UPDATE `users` SET `username` = :username, `path`= :thumbnail_file WHERE id = :id;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":thumbnail_file", $thumbnail_file);

    $stmt->execute();
}