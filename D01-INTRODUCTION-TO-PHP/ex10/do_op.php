#!/usr/bin/php
<?php
    if ($argc !== 4)
    {
        echo "Incorrect Parameters\n";
        return;
    }
    $first = intval(trim($argv[1]));
    $second = intval(trim($argv[3]));
    $op = trim($argv[2]);

    if ($op === "+")
        printf("%d\n", $first + $second);
    else if ($op === "-")
        printf("%d\n", $first - $second);
    else if ($op === "*")
        printf("%d\n", $first * $second);
    else if ($op === "/")
        if ($second === 0)
            echo "Do not Divide by Zero pleas ... \n";
        else
            printf("%d\n", $first / $second);
    else if ($op === "%")
        if ($second === 0)
            echo "Do not Divide by Zero pleas ... \n";
        else
        printf("%d\n", $first % $second);