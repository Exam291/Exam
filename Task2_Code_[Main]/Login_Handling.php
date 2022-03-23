<?php


include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';
include 'Models/Login_Script.php';

if ($loginSuccess == true){
    if ($accountType == "Student") {
        if ($loginSuccess == true){
            echo $blade->run("Student_Dashboard", array());
            $_SESSION["verification"] = setcookie("verification", $email, time() + (86400 * 30), "/");
        }
        else{
            echo $blade->run("Login_Page", array());
        }
    }
    
    elseif ($accountType == "Teacher"){
        if ($loginSuccess == true){
            echo $blade->run("Staff_Dashboard", array());
            $_SESSION["verification"] = setcookie("verification", $email, time() + (86400 * 30), "/");
        }
        else{
            echo $blade->run("Login_Page", array());
        }
    }
}
else {
    echo $blade->run("Signup_Page", array());
}
