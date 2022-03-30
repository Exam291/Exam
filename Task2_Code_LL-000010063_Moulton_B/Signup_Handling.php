<?php

include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$dateOfBirth = $_POST['dateOfBirth'];
$gender = $_POST['gender'];
$accountType = $_POST['accountType'];






$FetchStudentUsers = "
            SELECT * FROM studentusers WHERE email = '{$email}';
            ";
$FetchStaffUsers = "
            SELECT * FROM staffusers WHERE email = '{$email}'
            ";
$FetchStudentQuery = $connection->query($FetchStudentUsers);
$FetchStaffQuery = $connection->query($FetchStaffUsers);
    
if ((mysqli_num_rows($FetchStaffQuery) == 0) && (mysqli_num_rows($FetchStudentQuery) == 0)){
    if ($password == $confirmPassword)
    {
        if($accountType == "Student")
        {
        $Append = "
            INSERT INTO studentusers (
                firstName,
                lastName,
                email,
                Password,
                dateOfBirth,
                gender
            )
            VALUES (
                '{$firstName}',
                '{$lastName}',
                '{$email}',
                '{$password}',
                '{$dateOfBirth}',
                '{$gender}'
            )";
            $SQLQuery = $connection->query($Append);
        }
            
        elseif($accountType == "Teacher")
        {
            $Append = "
            INSERT INTO staffusers (
                firstName,
                lastName,
                email,
                Password,
                dateOfBirth,
                gender
                )
                VALUES (
                    '{$firstName}',
                    '{$lastName}',
                    '{$email}',
                    '{$password}',
                    '{$dateOfBirth}',
                    '{$gender}'
                    )";
            $SQLQuery = $connection->query($Append);
        } 
        echo $blade->run("Login_Page", array());
    }
}
else{
    echo $blade->run("Signup_Page", array());
}