<?php
    
    function last($str)
    {
        if (isset($str) && !empty($str))
        {
            $strOut = $str{strlen($str) - 1};
        }
        else
        {
            $strOut = '';
        }
        return $strOut;
    }

    function withoutLast($str)
    {
        $strOut = '';
        if (isset($str) && !empty($str))
        {
            for($i = 0; $i < strlen($str) - 1; $i++)
            {
                $strOut = $strOut . $str{$i};
            }
        }
        return $strOut;
    }

    function revers($str)
    {
        $strOut = '';
        if (isset($str) && !empty($str))
        {
            
            for($i = strlen($str) - 1; $i >= 0; $i--)
            {
                $strOut = $strOut . $str{$i};
            }            
        }
        return $strOut;
    }

    function checkIdent($str)
    {
        $strOut = '';
        if (isset($str) && !empty($str))
        {
            if (($str{0} >= 'a') && ($str{0} <= 'z'))
            {
                $strOut = 'Yes';
                for($i = 0; $i < strlen($i); $i++)
                {
                    if (($str{0} >= 'a') && ($str{0} <= 'z'))
                }
            }
            else
            {
                $strOut = 'No. First symbol of identifier must be small latin letter';
            }            
        }
        return $strOut;
    }

    function removeExtraBlanks($str)
    {
        $strOut = '';
        if (isset($str) && !empty($str))
        {
            $i = 0;
            while ($str{$i} == ' ')
            {
                $i++;
            }
            $j = strlen($str) - 1;
            while ($str{$j} == ' ')
            {
                $j--;
            }
            for( ; $i < $j; $i++)
            {
                if ($str{$i} <> ' ')
                {
                    $strOut = $strOut . $str{$i};
                }
                else
                {
                    if ($str{$i+1} <> ' ')
                    {
                        $strOut = $strOut . $str{$i};
                    }
                }
            }
            $strOut = $strOut . $str{$j};            
        }
        return $strOut;
    }
