<?php
    function auth($login, $passwd)
    {
        $path = "/home/ubuntu/Desktop/Piscine_PHP/D04-USER-SESSION/Passwd/Logs";
        if (!file_exists($path))
        {
            echo "$path doesn't exist\n";
            return ;
        }
        $db = unserialize(file_get_contents($path));
        foreach ($db as $key => $value)
        {
            if ($value['login'] === $login)
                if ($value['passwd'] === hash(whirlpool, $passwd))
                    return true;
        }
        file_put_contents($path, serialize($db));
        return false;
    }