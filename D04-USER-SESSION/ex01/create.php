<?php
    if ($_POST['login'] === "" || $_POST['passwd'] === "" && $_POST['submit'] !== "OK")
    {
        echo "ERROR\n";
        return ;
    }
    $path = "/home/ubuntu/Desktop/Piscine_PHP/D04-USER-SESSION/Passwd";
    if (!file_exists($path))
        mkdir($path);
    $path .= "/Logs";
    if (file_exists($path))
    {
        $file = unserialize(file_get_contents($path));
        foreach($file as $elem)
            if ($elem['login'] === $_POST['login'])
            {
                echo "ERROR\n";
                return ;
            }
    }
    $array['login'] = $_POST['login'];
    $array['passwd'] = hash(whirlpool, $_POST['passwd']);
    $file[] = $array;
    file_put_contents($path, serialize($file));
    echo "OK\n";