<?php

include_once 'Database_Connection.php';

$loginSuccess = false;

function RunLogin($connection){
    $FetchStudentString = null;
    $FetchStaffString = null;
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $accountType = $_POST['accountType'];
    
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);
    
    
    
    if ($accountType == "Student"){
        $FetchStudentUser = "
        SELECT Password FROM studentusers WHERE email = '{$email}';
        ";
        $FetchStudentQuery = $connection->query($FetchStudentUser);
        $FetchStudentArray = mysqli_fetch_assoc($FetchStudentQuery);
        if ($FetchStudentArray != null){
            $FetchStudentString = implode($FetchStudentArray);
        }
    }
    
    if ($accountType == "Teacher"){
            $FetchStaffUser = "
            SELECT Password FROM staffusers WHERE email = '{$email}'
            ";
            $FetchStaffQuery = $connection->query($FetchStaffUser);
            $FetchStaffArray = mysqli_fetch_assoc($FetchStaffQuery);
            if ($FetchStaffArray != null){
                $FetchStaffString = implode($FetchStaffArray);
            }
    }
    
    
    
    if ((($FetchStaffString != null) && ($FetchStaffString == $password)) || (($FetchStudentString != null) && ($FetchStudentString == $password)))
    {
        $loginSuccess = true;
    }
}
