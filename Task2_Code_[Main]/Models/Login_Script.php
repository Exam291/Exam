<?php

include_once 'Models/Database_Connection.php';


$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = $_POST['password'];

$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);
$passwordHash = mysqli_real_escape_string($connection, $password);
$passwordHash = password_hash($password, PASSWORD_BCRYPT);


$FetchStudentUser = "
            SELECT passwordHash FROM studentusers WHERE email = '{$email}';
            ";
$FetchStaffUser = "
            SELECT passwordHash FROM staffusers WHERE email = '{$email}'
            ";
$FetchStudentQuery = $connection->query($FetchStaffUser);
$FetchStaffQuery = $connection->query($FetchStudentUser);


if (($FetchStaffQuery != null) || ($FetchStudentQuery != null)){
    if (($passwordHash == $FetchStaffQuery) || ($passwordHash == $FetchStudentQuery) ){
        echo $blade->run("Student_Dashboard",array());
    }
}
elseif (($FetchStaffQuery == null) && ($FetchStudentQuery == null)){
    echo $blade->run("Staff_Dashboard",array());
}
