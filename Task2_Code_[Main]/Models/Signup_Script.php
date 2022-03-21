<?php

include 'Database_Connection.php';


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$dateOfBirth = $_POST['dateOfBirth'];
$gender = $_POST['gender'];
$accountType = $_POST['accountType'];



$firstName = mysqli_real_escape_string($connection, $firstName);
$lastName = mysqli_real_escape_string($connection, $lastName);
$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);
$confirmPassword = mysqli_real_escape_string($connection, $confirmPassword);
$dateOfBirth = mysqli_real_escape_string($connection, $dateOfBirth);
$gender = mysqli_real_escape_string($connection, $gender);
$accountType = mysqli_real_escape_string($connection, $accountType);




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

    else
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
    if(!$SQLQuery){
        die("MYSQL query failed - please try again." . mysqli_error($connection));
    }
}




