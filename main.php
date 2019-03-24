<?php

use Src\InterfaceAdapters\Controllers\UserController;

require_once "bootstrap.php";

echo("=======================================\n");
echo("Welcome to sample of clean architecture\n");
echo("=======================================\n");
echo("\n");

/**
 * @var UserController $controller
 */
$controller = new UserController();
while (1) {
    echo("Enter the name of the new user.\n");
    echo("username:\n");
    echo(">");
    $username = trim(fgets(STDIN));
    $controller->createUser($username);
}
