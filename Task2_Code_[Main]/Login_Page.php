<?php


include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';
include 'Models/Check_User.php';
echo $blade->run("Login_Page",array());


session_start();

if (isset($_POST['email'])) {
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    $user_Exists = new UserExists($connection, $email, $password);
    }
    else {
        $msg = "Something went wrong, please try again.";
    }

