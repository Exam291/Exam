<?php

include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';

$maxPosition = 0;

$FetchStudentCoursesQuery = " 
                        SELECT * FROM `studentcourses`
";
                
$FetchStudentCoursesQueryResult = $connection->query($FetchStudentCoursesQuery);
$MatchingEntries = mysqli_fetch_assoc($FetchStudentCoursesQueryResult);

if($MatchingEntries != NULL){
    $maxPosition = sizeof($MatchingEntries);
}

echo $blade->run("Staff_Student_Courses" -> with("MatchingEntries"=>$MatchingEntries), array("maxPosition"=>$maxPosition));
