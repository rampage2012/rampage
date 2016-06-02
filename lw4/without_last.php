<?php
    require_once 'include/string.inc.php';
    if ((isset($_GET['str'])) && (!empty($_GET['str'])))
    {
        echo withoutLast($_GET['str']);
    }
    else
    {
        echo "parameter 'str' is not specified or get empty letter";
    }

    