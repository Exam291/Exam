<?php

include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';

$FetchStudentString = null;
$FetchStaffString = null;

$email = $_POST['email'];
$password = $_POST['password'];
$accountType = $_POST['accountType'];

$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);



if ($accountType == "Student"){
    $FetchStudentUser = "
    SELECT password FROM studentusers WHERE email = '{$email}';
    ";
    $FetchStudentQuery = $connection->query($FetchStudentUser);
    if ($FetchStudentQuery != null){
        $FetchStudentArray = mysqli_fetch_assoc($FetchStudentQuery);
        $FetchStudentString = implode($FetchStudentArray);
        if ($FetchStudentString == $password){
            setcookie("user", $email, time() + (86400 * 30), "/");
            echo $blade->run("Student_Dashboard", array());
        }
    }
}

elseif ($accountType == "Teacher"){
        $FetchStaffUser = "
        SELECT password FROM staffusers WHERE email = '{$email}'
        ";
        $FetchStaffQuery = $connection->query($FetchStaffUser);
        if ($FetchStaffQuery != null){
            $FetchStaffArray = mysqli_fetch_assoc($FetchStaffQuery);
            $FetchStaffString = implode($FetchStaffArray);
            if ($FetchStaffString == $password) 
            {
                setcookie("user", $email, time() + (86400 * 30), "/");
                echo $blade->run("Staff_Dashboard", array());
            }
        }
}

else {
    echo $blade->run("Login_Page", array());
}