<?php

include 'Database_Connection.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$dateOfBirth = $_POST['dateOfBirth'];
$gender = $_POST['gender'];


$firstName = mysqli_real_escape_string($connection, $firstName);
$lastName = mysqli_real_escape_string($connection, $lastName);
$email = mysqli_real_escape_string($connection, $email);
$dateOfBirth = mysqli_real_escape_string($connection, $dateOfBirth);
$gender = mysqli_real_escape_string($connection, $gender);



$FetchStudentFirstName = "
            SELECT * FROM studentusers WHERE firstName = '{$firstName}';
            ";

$FetchStudentLastName = "
            SELECT * FROM studentusers WHERE lastName = '{$lastName}';
            ";

$FetchStudentEmail = "
            SELECT * FROM studentusers WHERE email = '{$email}';
            ";

$FetchStudentDateOfBirth = "
            SELECT * FROM studentusers WHERE dateOfBirth = '{$dateOfBirth}';
            ";

$FetchStudentGender = "
            SELECT * FROM studentusers WHERE gender = '{$gender}';
            ";


$FetchStudentFirstName = $connection->query($FetchStudentFirstName);
$FetchStudentLastName = $connection->query($FetchStudentLastName);
$FetchStudentEmail = $connection->query($FetchStudentEmail);
$FetchStudentDateOfBirth = $connection->query($FetchStudentDateOfBirth);
$FetchStudentGender = $connection->query($FetchStudentGender);

$FetchStudentFirstNameArray = mysqli_fetch_assoc($FetchStudentFirstName);
$FetchStudentLastNameArray = mysqli_fetch_assoc($FetchStudentLastName);
$FetchStudentEmailArray = mysqli_fetch_assoc($FetchStudentEmail);
$FetchStudentDateOfBirthArray = mysqli_fetch_assoc($FetchStudentDateOfBirth);
$FetchStudentGenderArray = mysqli_fetch_assoc($FetchStudentGender);

$FetchStudentFirstNameString = implode($FetchStudentFirstNameArray);
$FetchStudentLastNameString = implode($FetchStudentLastNameArray);
$FetchStudentEmailString = implode($FetchStudentEmailArray);
$FetchStudentDateOfBirthString = implode($FetchStudentDateOfBirthArray);
$FetchStudentGenderString = implode($FetchStudentGenderArray);