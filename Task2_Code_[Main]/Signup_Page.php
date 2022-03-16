<?php


include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';
include 'Models/Check_User.php';

echo $blade->run("Signup_Page",array());



if ($_POST != null)
    {
    $User_Create = new User_Create($connection, $_POST['firstName'], $_POST['lastName'],  $_POST['email'], $_POST['password'], $_POST['confirmPassword'], $_POST['dateOfBirth'], $_POST['gender'], $_POST['accountType']);
    $User_Create->__construct();
}


