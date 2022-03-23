<?php


include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';
include 'Models/Signup_Script.php';
include 'Models/Login_Script.php';

if ($Status != true){
    if ($accountType == "Student") {
        if ($loginSuccess == true){
            echo $blade->run("Student_Dashboard", array());
        }
        else{
            echo $blade->run("Login_Page", array());
            print("2");
        }
    }
    
    elseif ($accountType == "Teacher"){
        if ($loginSuccess == true){
            echo $blade->run("Staff_Dashboard", array());
        }
        else{
            echo $blade->run("Login_Page", array());
        }
    }
}
else {
    echo $blade->run("Login_Page", array());
    print("1");
}