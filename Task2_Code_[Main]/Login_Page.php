<?php


include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';
echo $blade->run("Login_Page",array());


session_start();

if (isset($_POST['email'])) {
    $Entryemail = strip_tags($_POST['email']);
    $EntryPassword = strip_tags($_POST['Password']);
    if (($_SESSION["email"] == $Entryemail) && ($_SESSION["Password"] == $EntryPassword)){
        $msg = "You are now logged in.";
        setcookie("email", $_SESSION["email"], time() + (3600), "/");
        echo $blade->run("Student_Dashboard", array("message" => $msg));
    }
    else {
        $msg = "Something went wrong, please try again.";
    }
}
