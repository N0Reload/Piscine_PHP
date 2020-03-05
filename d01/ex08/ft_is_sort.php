#!/usr/bin/php
<?php
    function ft_is_sort($array)
    {
        $compare = $array;
        sort($compare);
        if ($compare === $array)
            return true;
        else
            return false;
    }