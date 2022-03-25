<?php

include 'Database_Connection.php';


function RunSignup($connection){

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
    
    
    
    
    
    
    if (($FetchStaffQuery == null) && ($FetchStudentQuery == null))
    {
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
                } 
                $SQLQuery = $connection->query($Append);
        }
    }
}

