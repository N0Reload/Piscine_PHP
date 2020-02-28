#!/usr/bin/php
<?php
    $i = 0;
    while($i <= $argc - 1)
    {
        $var = explode(' ', $argv[$i]);
        $i++;
    }
    print_r($var);