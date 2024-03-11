<?php

declare(strict_types=1);

// Validation functions
function is_input_empty($input)
{
    if(empty($input))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function is_username_registered(object $pdo, string $username)
{
    if(get_username($pdo, $username))
    {
        return true;
    }
    else
    {
        return false;
    }
}

// Create function
function edit_user(object $pdo, string $username, string $thumbnail_file)
{
    set_user($pdo, $username, $thumbnail_file);
}