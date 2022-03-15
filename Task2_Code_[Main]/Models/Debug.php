<?php

$i = 1;

class Debug{
    function Debug(){
        global $i;
        while (true) {
            Print("test" . $i);
            $i++;
        }
    }
}