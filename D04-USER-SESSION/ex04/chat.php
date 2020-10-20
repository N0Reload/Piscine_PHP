<?php
    $path = "/home/noreload/Desktop/Piscine_PHP/Private/chat";
    if (file_exists($path))
    {
        $db = unserialize(file_get_contents($path));
        date_default_timezone_get();
        foreach($db as $value)
        {
            $chat = "[".date('H:i', $value['time'])."] <b>".$value['login']."</b>: ".$value['msg']."<br />\n";
            echo $chat;
        }
    }