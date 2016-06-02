<?php
    require_once 'include/string.inc.php';
    if ((isset($_GET['text'])) && (!empty($_GET['text'])))
    {
        echo removeExtraBlanks($_GET['text']);
    }
    else
    {
        echo "parameter 'str' is not specified or get empty letter";
    }
    