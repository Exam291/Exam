<?php


include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';
include_once 'Models/Check_User.php';
echo $blade->run("Signup_Page",array());



$User_Create = new User_Create($_POST['email'], $_POST['password']);
$User_Create->insert();