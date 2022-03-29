<?php

include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';

$maxPosition = 0;

if (isset($_POST['email'])){
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($connection, $email);
    $FetchStudentsQuery = "
                    SELECT * FROM studentusers WHERE email LIKE '{$email}';
    ";
    $FetchStudentsqueryResult = $connection->query($FetchStudentsQuery);
    $MatchingEntries = mysqli_fetch_assoc($FetchStudentsqueryResult);
}

else{
    $FetchStudentsQuery = "
    SELECT * FROM `studentusers`;
    ";
    $FetchStudentsqueryResult = $connection->query($FetchStudentsQuery);
    $MatchingEntries = mysqli_fetch_assoc($FetchStudentsqueryResult);
}
if($MatchingEntries != NULL){
    $maxPosition = sizeof($MatchingEntries);
}

echo $blade->run("Staff_Students",array("MatchingEntries"=>$MatchingEntries, "maxPosition"=>$maxPosition));
