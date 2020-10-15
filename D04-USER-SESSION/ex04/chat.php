<?php
    $path = "/home/noreload/Desktop/Piscine_PHP/Private/chat";
    if (file_exists($path))
    {
        $db = unserialize(file_get_contents($path));
        date_default_timezone_get('Europe/Paris');
        echo '<!DOCTYPE html><html><body>';
        foreach ($db as $value)
        {
            $line = "[".date(G:i)
        }
    }