<?php
    header("Content-Type: text/plain");

    function autoloader($str)
    {
        $entries = scandir($str);
        $filelist = array();
        foreach($entries as $entry)
        {
            if (strpos($entry, ".inc.php"))
            {
                require_once $entry;
            }
        }
    }