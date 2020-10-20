<?php
    session_start();

    if ($_SESSION['loggued_on_user'] !== "")
    {
        echo '<!DOCTYPE html><html><head></head><body>';
        echo "<script langage='javascript'>top.frames['chat'].location = 'chat.php';</script>";
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
    $fp = fopen($path, "r+");
    if (flock($fp, LOCK_EX))
    {
        $db = unserialize(file_get_contents($path));
        $msg = array('login' => $_SESSION['loggued_on_user'], 'time' => time(), 'msg' => $_POST['msg']);
        $file[] = $msg;
        file_put_contents($path, serialize($file));
    }
    fclose($fp);
    echo '</form></body></html>';