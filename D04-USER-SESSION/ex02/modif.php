<?php
    if (($_POST['login'] === "" || $_POST['oldpw'] === "" || $_POST['newpw'] === "") && $_POST['submit'] !== "OK")
    {
        echo "ERROR\n";
        return ;
    }
    $path = "/home/ubuntu/Desktop/Piscine_PHP/D04-USER-SESSION/Passwd/Logs";
    if (!file_exists($path))
    {
        echo "ERROR\n";
        return ;
    }
    $db = unserialize(file_get_contents($path));
    $bool = false;
    foreach ($db as $key => $value)
        if ($value['login'] === $_POST['login'])
            if ($value['passwd'] === hash(whirlpool, $_POST['oldpw']))
            {
                $bool = true;
                $db[$key]['passwd'] = hash(whirlpool, $_POST['newpw']);
                file_put_contents($path, serialize($db));
                echo "OK\n";
            }
    if (!$bool)
        echo("ERROR\n");
    print_r($db);