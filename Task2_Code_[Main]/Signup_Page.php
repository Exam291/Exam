<?php


include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';
include 'Models/Check_User.php';
echo $blade->run("Signup_Page",array());


// if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword']) && isset($_POST['dateOfBirth']) && isset($_POST['gender']) && isset($_POST['accountType']))
// {
    $User_Create = new User_Create($_POST['firstName'], $_POST['lastName'],  $_POST['email'], $_POST['password'], $_POST['confirmPassword'], $_POST['dateOfBirth'], $_POST['gender'], $_POST['accountType']);
    $user_Create->printDebug();
    $User_Create->insert();
    echo $blade->run("student_Dashboard", array());
// }