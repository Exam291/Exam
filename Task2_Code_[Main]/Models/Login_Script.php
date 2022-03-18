<?php

include_once 'Database_Connection.php';



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
$FetchStaffArray = mysqli_fetch_assoc($FetchStaffQuery);
$FetchStudentArray = mysqli_fetch_assoc($FetchStudentQuery);
$FetchStaffString = $FetchStaffArray[];
$FetchStudentString = $FetchStudentArray[];

print("1");

if (($FetchStaffQuery != null) || ($FetchStudentQuery != null)){
    if ($passwordHash == $FetchStaffQuery){
        echo $blade->run("./Staff_Dashboard",array());
        print("2");
    }
    else {
        echo $blade->run("./Student_Dashboard",array());
        print("3");
    }
}
else {
    echo $blade->run("./Student_Dashboard", array());
    print("4");
}
