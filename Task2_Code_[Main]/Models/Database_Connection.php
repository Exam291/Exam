<?php

include_once 'Library/Blade_Setup.php';
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gibjohn_tutorials";
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or die ('Sorry, cannot connect to MySQL');