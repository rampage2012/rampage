<?php
    header("Content-Type: text/plain");
    if ((isset($_GET['arg1'])) && (isset($_GET['arg2'])) && (isset($_GET['operation'])))
    {
        $oper = $_GET['operation']; 
        if ( $oper == "add" )     
        {
            echo (intval($_GET['arg1']) + intval($_GET['arg2']));
        }
        if ( $oper == "sub" )     
        {
            echo (intval($_GET['arg1']) - intval($_GET['arg2']));
        }
        if ( $oper == "mul" )     
        {
            echo (intval($_GET['arg1']) * intval($_GET['arg2']));
        }
        if ( $oper == "div" )     
        {
            echo (intval($_GET['arg1']) / intval($_GET['arg2']));
        }
    }
     