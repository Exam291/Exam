<?php


include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';
include 'Models/Signup_Script.php';
include 'Models/Login_Script.php';

RunSignup($connection);


echo $blade->run("Login_Page", array());