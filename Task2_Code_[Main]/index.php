<?php

include_once 'Library/Blade_Setup.php';
include 'Models/Database_Connection.php';
echo $blade->run("Default_View_Template",array());

