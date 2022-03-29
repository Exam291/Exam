<?php

include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';

$maxPosition = 0;

$FetchStudentsQuery = " 
                        SELECT * FROM `studentusers`
";
                
$FetchStudentsqueryResult = $connection->query($FetchStudentsQuery);
$MatchingEntries = mysqli_fetch_assoc($FetchStudentsqueryResult);

if($MatchingEntries != NULL){
    $maxPosition = sizeof($MatchingEntries);
}
echo $blade->run("Staff_Students",array("MatchingEntries"=>$MatchingEntries, "maxPosition"=>$maxPosition));


