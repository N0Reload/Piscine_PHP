<?php
    function auth($login, $passwd)
    {
        $path = "/home/ubuntu/Desktop/Piscine_PHP/D04-USER-SESSION/Passwd/Logs";
        if (!file_exists($path) || !$login || $passwd)
            return false;
        $db = unserialize(file_get_contents($path));
        foreach ($db as $key => $value)
            if ($value['login'] === $login && $value['passwd'] === hash("whirlpool", $passwd))
                    return true;
        return false;
    }