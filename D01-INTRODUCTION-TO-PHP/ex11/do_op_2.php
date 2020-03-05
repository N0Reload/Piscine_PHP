#!/usr/bin/php
<?php
    if ($argc != 2)
    {
        echo("Incorrect Parameters\n");
        return;
    }

    function get_op($string)
    {
        $k = -1;
        while ($string[++$k] != NULL)
            if ($string[$k] === '+' || $string[$k] === '-' || $string[$k] === '*' || $string[$k] === '/' || $string[$k] === '%')
                break;
        return $string[$k];
    }

    if (!($op = get_op($argv[1])))
    {
        echo "Syntax Error\n";
        return;
    }

    if (count($array = explode($op, $argv[1]), COUNT_NORMAL) != 2)
    {
        echo "Syntax Error\n";
        return;
    }

    if (!is_numeric($first = preg_replace('/\s+/', '', $array[0])))
    {
        echo "Syntax Error\n";
        return;
    }

    if (!is_numeric($second = preg_replace('/\s+/', '', $array[1])))
    {
        echo "Syntax Error\n";
        return;
    }
    if ($op === "+")
        printf("%d\n", $first + $second);
    else if ($op === "-")
        printf("%d\n", $first - $second);
    else if ($op === "*")
        printf("%d\n", $first * $second);
    else if ($second === 0)
    {
        echo "Do not Divide by Zero pleas ... \n";
        return ;
    }
    else if ($op === "/")
        printf("%d\n", $first / $second);
    else if ($op === "%")
        printf("%d\n", $first % $second);
