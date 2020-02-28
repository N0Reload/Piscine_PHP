#!/usr/bin/php
<?php

    if ($argc == 2)
    {
        $var = trim($argv[1]);
        $i = 0;
        $space = false;
        while($i < strlen($var))
        {
            if ($var[$i] == ' ')
            {
                if ($space == false)
                {
                    echo ' ';
                    $space = true;
                }
                $i++;
            }
            else
            {
                while ($i < strlen($var) && !($var[$i] == ' '))
                {
                    $space = false;
                    echo "$var[$i]";
                    $i++;
                }
            }
        }
        echo "\n";
    }