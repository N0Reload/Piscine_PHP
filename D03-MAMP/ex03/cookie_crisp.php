<?php
    $action = $_GET['action'];
    $name = $_GET['name'];
    $value = $_GET['value'];

    if (!$action || !$name)
        return ;
    if ($action === "get")
        echo $_COOKIE[$name];
    else if ($action === "del")
        setcookie($name, null, -1);
    else if ($action === "set")
        setcookie($name, $value, time() + 60*60*42, null, null, false, true);
