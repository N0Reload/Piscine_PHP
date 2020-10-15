<?php
    $path = "/home/noreload/Desktop/Piscine_PHP/Private/chat";
    if (file_exists($path))
    {
        $db = unserialize(file_get_contents($path));

    }