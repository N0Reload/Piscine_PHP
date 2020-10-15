<?php
    header("Refresh: 2; URL=index.html");
    session_start();

    $path = "/home/noreload/Desktop/Piscine_PHP/Private";
    if (!file_exists($path))
        mkdir($path);

    $path .= "/passwd";
    if ($_POST['submit'] !== "OK" || $_POST['login'] === null || $_POST['login'] === "" || $_POST['passwd'] === null || $_POST['passwd'] === "")
    {
        echo "ERROR\n";
        return ;
    }
    if (file_exists($path))
    {
        $file = unserialize(file_get_contents($path));
        foreach ($file as $value)
        {
            if ($value['login'] === $_POST['login'])
            {
                echo "ERROR\n";
                return ;
            }
        }
    }
    $array['login'] = $_POST['login'];
    $array['passwd'] = hash('whirlpool', $_POST['passwd']);
    $file[] = $array;
    file_put_contents($path, serialize($file));
    echo "OK\n";
