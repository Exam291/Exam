<?php

include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';

session_start();

echo $blade->run("Home_Page",array());

