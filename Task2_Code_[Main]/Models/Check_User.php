<?php

include_once 'Models/Database_Connection.php';

class User_Create{

    public $firstName = 'firstName';
    public $lastName = 'lastName';
    public $email = 'email';
    public $password = 'password';
    public $confirmPassword = 'confirmPassword';
    public $dateOfBirth = 'dateOfBirth';
    public $gender = 'gender';
    public $accountType = 'accountType';
    public $passwordHash = 'passwordHash';
    public $confirmPasswordHash = 'confirmPasswordHash';

    function __construct($connection, $firstName, $lastName, $email, $password, $confirmPassword, $dateOfBirth, $gender, $accountType)
    {
        $this->firstName = mysqli_real_escape_string($connection, $firstName);
        $this->lastName = mysqli_real_escape_string($connection, $lastName);
        $this->email = mysqli_real_escape_string($connection, $email);
        $this->password = mysqli_real_escape_string($connection, $password);
        $this->confirmPassword = mysqli_real_escape_string($connection, $confirmPassword);
        $this->dateOfBirth = mysqli_real_escape_string($connection, $dateOfBirth);
        $this->gender = mysqli_real_escape_string($connection, $gender);
        $this->accountType = mysqli_real_escape_string($connection, $accountType);
        $this->passwordHash = password_hash($connection, PASSWORD_BCRYPT);
        $this->confirmPasswordHash = password_hash($connection, PASSWORD_BCRYPT);

        $this->connection = $connection;
    }

    function insert() {
        if ($this->password == $this->confirmPassword)
        {
            __construct($connection, $firstName, $lastName, $email, $password, $confirmPassword, $dateOfBirth, $gender, $accountType);
            if($this->accountType == "Student")
            {
                $Append = <<<SQL
                    INSERT INTO studentusers (
                        firstName,
                        lastName,
                        email,
                        passwordHash,
                        dateOfBirth,
                        gender
                    )
                    VALUES (
                        {$this->firstName},
                        {$this->lastName},
                        {$this->email},
                        {$this->passwordHash},
                        {$this->dateOfBirth},
                        {$this->gender},
                    )
                SQL;
            }
            else
            {
                $Append = <<<SQL
                INSERT INTO StaffUsers (
                    firstName,
                    lastName,
                    email,
                    passwordHash,
                    dateOfBirth,
                    gender
                )
                VALUES (
                    {$this->firstName},
                    {$this->lastName},
                    {$this->email},
                    {$this->passwordHash},
                    {$this->dateOfBirth},
                    {$this->gender},
                )
            SQL;
            }
        }

        $SQLQuery = $this->connection->query($Append);

        if(!$SQLQuery){
            die("MYSQL query failed - please try again." . mysqli_error($this->connection));
        }
    }
}