<?php


include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';
include 'Models/Login_Script.php';


RunLogin($connection);
if ($loginSuccess == true){
    if ($accountType == "Student") {
        echo $blade->run("Student_Dashboard", array());
        $_SESSION["verification"] = setcookie("verification", $email, time() + (86400 * 30), "/");
    }
    
    elseif ($accountType == "Teacher"){
        echo $blade->run("Staff_Dashboard", array());
        $_SESSION["verification"] = setcookie("verification", $email, time() + (86400 * 30), "/");
    }
} 
else {
    echo $blade->run("Signup_Page", array());
}
