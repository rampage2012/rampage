<?php
    header("Content-Type: text/plain");
    require_once 'include/string.inc.php';
    if ((isset($_GET['text'])) && (!empty($_GET['text'])))
    {
        echo passStrength($_GET['text']);
    }
    else
    {
        echo "ѕараметры не заданы или передана пуста¤ строка";
    }