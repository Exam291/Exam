<?php

include_once 'Database_Connection.php';



$email = $_POST['email'];
$password = $_POST['password'];

$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);



$FetchStudentUser = "
            SELECT Password FROM studentusers WHERE email = '{$email}';
            ";
$FetchStaffUser = "
            SELECT Password FROM staffusers WHERE email = '{$email}'
            ";
$FetchStudentQuery = $connection->query($FetchStudentUser);
$FetchStaffQuery = $connection->query($FetchStaffUser);
$FetchStaffArray = mysqli_fetch_assoc($FetchStaffQuery);
$FetchStudentArray = mysqli_fetch_assoc($FetchStudentQuery);
$FetchStaffString = implode($FetchStaffArray);
$FetchStudentString = implode($FetchStudentArray);




if (($FetchStaffQuery != null) || ($FetchStudentQuery != null)){
    if ($password == $FetchStaffString){
    }
    elseif ($password == $FetchStudentString) {
    }
}
else {
}
