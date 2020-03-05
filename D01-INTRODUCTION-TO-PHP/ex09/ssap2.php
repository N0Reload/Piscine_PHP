#!/usr/bin/php
<?php

    function ft_sort($elem1, $elem2)
    {
        $elem1 = strtolower($elem1);
        $elem2 = strtolower($elem2);
        $s = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
        $k = 0;
        while ($elem1[$k] && $elem2[$k])
        {
            $pos1 = strpos($s, $elem1[$k]);
            $pos2 = strpos($s, $elem2[$k]);
            if ($pos1 == $pos2)
                ++$k;
            else if ($pos1 > $pos2)
                return 1;
            else
                return -1;
        }
        return 0;
    }
    if ($argc > 1)
        $array = explode(" ", $argv[1]);
    for ($k = 2; $k < $argc; ++$k)
    {
        $array_new = explode(" ", $argv[$k]);
        $size = count($array_new);
        for ($p = 0; $p < $size; ++$p)
            if ($array_new[$p])
                array_push($array, $array_new[$p]);
    }

    if ($argc > 1)
    {
        usort($array, "ft_sort");
        $max = count($array);
        for ($k = 0; $k < $max; ++$k)
            if ($array[$k])
                printf("%s\n", $array[$k]);
    }