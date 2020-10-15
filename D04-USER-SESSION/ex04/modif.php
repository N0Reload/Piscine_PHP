<?php
    header("Refresh: 2; URL=index.html");

    if ($_POST['submit'] !== "OK" || $_POST['login'] === null || $_POST['login'] === "" || $_POST['oldpw'] === null || $_POST['oldpw'] === ""
        || $_POST['newpw'] === null || $_POST['newpw'] === "")
    {
        echo "ERROR\n";
        return ;
    }
    $path = "/home/noreload/Desktop/Piscine_PHP/Private/passwd";
    if (file_exists($path))
    {
        $file = unserialize(file_get_contents($path));
        foreach ($file as $key => $value)
        {
            if ($value['login'] === $_POST['login'] && $value['passwd'] === hash('whirlpool', $_POST['oldpw']))
            {
                $file[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
                file_put_contents($path, serialize($file));
                echo "OK\n";
                return ;
            }
        }
    }
    echo "ERROR\n";