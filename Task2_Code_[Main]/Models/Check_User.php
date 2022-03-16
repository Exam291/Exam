<?php

include_once 'Models/Database_Connection.php';
include 'Models/Debug.php';

// class User_Exists {
//     public $email = 'email';
//     public $password = 'password';
//     $passwordHash = password_hash($password, PASSWORD_BCRYPT);
//     function UserCheck(){

//         $FetchStudentUser = "
//                     SELECT passwordHash FROM studentusers WHERE email = '{$this->email}';
//                     ";
//         $FetchStaffUser = "
//                     SELECT passwordHash FROM staffusers WHERE email = '{$this->email}'
//                     ";
//         $FetchStudentQuery = $this->connection->query($FetchStaffUser);
//         $FetchStaffQuery = $this->connection->query($FetchStudentUser);
//         if (($FetchStaffQuery != null) || ($FetchStudentQuery != null)){
//             if (($this->passwordHash == $FetchStaffQuery) || ($this->passwordHash == $FetchStudentQuery) ){
//                 echo $blade->run("Student_Dashboard",array());
//             }
//         }
//         elseif (($FetchStaffQuery == null) && ($FetchStudentQuery == null)){
//             echo $blade->run("Staff_Dashboard",array());
//         }
    
//     }
//}

class User_Create{

    public $firstName = 'firstName';
    public $lastName = 'lastName';
    public $email = 'email';
    public $password = 'password';
    public $confirmPassword = 'confirmPassword';
    public $dateOfBirth = 'dateOfBirth';
    public $gender = 'gender';
    public $accountType = 'accountType';
    public $passwordHash = 'password';
    public $confirmPasswordHash = 'confirmPassword';

    function __construct() {
        $this->firstName = mysqli_real_escape_string($this->connection, $this->firstName);
        $this->lastName = mysqli_real_escape_string($connection, $lastName);
        $this->email = mysqli_real_escape_string($connection, $email);
        $this->password = mysqli_real_escape_string($connection, $password);
        $this->confirmPassword = mysqli_real_escape_string($connection, $confirmPassword);
        $this->dateOfBirth = mysqli_real_escape_string($connection, $dateOfBirth);
        $this->gender = mysqli_real_escape_string($connection, $gender);
        $this->accountType = mysqli_real_escape_string($connection, $accountType);
        $this->passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $this->confirmPasswordHash = password_hash($confirmPassword, PASSWORD_BCRYPT);
    
        $this->connection = $connection;
        insert();
    }
    function insert() {


        if ($this->password == $this->confirmPassword)
        {
            if($this->accountType == "Student")
            {
                $Append = "
                    INSERT INTO studentusers (
                        firstName,
                        lastName,
                        email,
                        passwordHash,
                        dateOfBirth,
                        gender
                    )
                    VALUES (
                        '{$this->firstName}',
                        '{$this->lastName}',
                        '{$this->email}',
                        '{$this->passwordHash}',
                        '{$this->dateOfBirth}',
                        '{$this->gender}'
                    )";
            }
            else
            {
                $Append = "
                INSERT INTO utaffusers (
                    firstName,
                    lastName,
                    email,
                    passwordHash,
                    dateOfBirth,
                    gender
                )
                VALUES (
                    '{$this->firstName}',
                    '{$this->lastName}',
                    '{$this->email}',
                    '{$this->passwordHash}',
                    '{$this->dateOfBirth}',
                    '{$this->gender}'
                )";
            
            }
        }

        $SQLQuery = $this->connection->query($Append);

        if(!$SQLQuery){
            die("MYSQL query failed - please try again." . mysqli_error($this->connection));
        }
    }
}