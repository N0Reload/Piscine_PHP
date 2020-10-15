<?php
    function auth($login, $passwd)
    {
        $path = "/home/noreload/Desktop/Piscine_PHP/Private/passwd";
        if (file_exists($path) || $login !== null || $login !== "" || $passwd !== null || $passwd !== "")
        {
            $file = unserialize(file_get_contents($path));
            foreach ($file as $key => $value)
                if ($value['login'] === $login && $value['passwd'] === hash('whirlpool', $passwd))
                    return TRUE;
                return FALSE;
        }
    }
