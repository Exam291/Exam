<?php

include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';

$maxPosition = 0;

if (isset($_POST['studentID'])){
    $studentID = $_POST['studentID'];
    $studentID = mysqli_real_escape_string($connection, $studentID);
    $FetchStudentCoursesQuery = "
    SELECT * FROM `studentcourses` WHERE StudentID = '{$studentID}';
    ";
    $FetchStudentCoursesQueryResult = $connection->query($FetchStudentCoursesQuery);
    if($FetchStudentCoursesQueryResult!=FALSE){
        $MatchingEntries = mysqli_fetch_assoc($FetchStudentCoursesQueryResult);
    }
    else{
        $MatchingEntries = NULL;
    }
}

else{
    $FetchStudentsQuery = "
    SELECT * FROM `studentcourses`
    ";
    $FetchStudentCoursesQueryResult = $connection->query($FetchStudentCoursesQuery);
    $MatchingEntries = mysqli_fetch_assoc($FetchStudentCoursesQueryResult);
}
if($MatchingEntries != NULL){
    $maxPosition = sizeof($MatchingEntries);
}

echo $blade->run("Staff_Student_Courses",array("MatchingEntries"=>$MatchingEntries, "maxPosition"=>$maxPosition));
