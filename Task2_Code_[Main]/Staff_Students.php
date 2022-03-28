<?php

include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';



$FetchStudentsQuery = "
                SELECT * FROM studentusers;
                ";
                
$FetchStudentsqueryResult = $connection->query($FetchStudentsQuery);
$MatchingEntries = mysqli_fetch_assoc($FetchStudentsqueryResult);
echo $blade->run("Staff_Students",array("MatchingEntries"=>$MatchingEntries, "MatchingEntriesCount"=>$FetchStudentsqueryResult));


