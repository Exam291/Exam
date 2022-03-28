<?php

include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';


if (isset($_POST['email'])){
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($connection, $email);
    $FetchStudentsQuery = "
                    SELECT * FROM studentusers WHERE email = '{$email}';
                    ";
}

else{
    $FetchStudentsQuery = "
                    SELECT * FROM studentusers';
                    ";
}

$FetchStudentsqueryResult = $connection->query($FetchStudentsQuery);

$MatchingEntries = mysqli_fetch_assoc($FetchStudentsqueryResult);

echo $blade->run("Staff_Students",array("MatchingEntries"=>$MatchingEntries));