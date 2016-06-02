<?php
    require_once 'include/string.inc.php';
    if ((isset($_GET['identifier'])) && (!empty($_GET['identifier'])))
    {
        echo checkIdent($_GET['identifier']);
    }
    else
    {
        echo "parameter 'str' is not specified or get empty letter";
    }
    