<?php


include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';
include 'Models/Staff_Student_Filter_Form_Handling.php';


$studentArray = $FetchStudents;

echo $blade->run("Staff_Students", array($studentArray));




