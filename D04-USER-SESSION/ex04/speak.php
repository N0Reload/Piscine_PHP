<?php
    session_start();

    if ($_SESSION['loggued_on_user'] !== "")
    {
        echo '<!DOCTYPE html><html><head></head><body>';
        echo '<form method="post" action="speak.php">';
        echo 'Message : <input type="text" name="msg">';
        echo '<input type="submit" name="send" value="send">';
    }
    else
        echo "You are not loggued, pleas log in\n";
    $path = "/home/noreload/Desktop/Piscine_PHP/Private";
    if (!file_exists($path))
        mkdir($path);
    $path .= "/chat";
    $fp = fopen($path, 'r+');
    if (flock($fp, LOCK_EX))
    {
        $db = unserialize(file_get_contents($path));
        $msg['login'] = $_SESSION['loggued_on_user'];
        $msg['time'] = time();
        $msg['msg'] = $_POST['msg'];
        $file[] = $msg;
        file_put_contents($path, serialize($file));
        fclose($fp);
    }
    echo '</form></body></html>';