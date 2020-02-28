#!/usr/bin/php
<?php
    while(42)
    {
        echo "Entrez un nombre: ";
        $fd = fopen("php://stdin", "r");
        $number = fgets($fd);
        if (!$number)
            break;
        $number = trim($number);
        fclose($fd);
        if (is_numeric($number))
        {
            if (intval($number) % 2 == 0)
                echo "Le chiffre $number est Pair\n";
            else
                echo "Le chiffre $number est Impair\n";
        }
        else
            echo "'$number' n'est pas un chiffre\n";
    }
    echo "\n";
