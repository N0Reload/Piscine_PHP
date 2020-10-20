<?php
    session_start();

    if ($_SESSION['loggued_on_user'] === "")
    {
        echo "ERROR\n";
        return ;
    }
    else
    {
        $path = "/home/noreload/Desktop/Piscine_PHP/Private";
        if (!file_exists($path))
            mkdir($path);
        $path .= "/chat";
        $fp = fopen($path, "r+");
        if (flock($fp, LOCK_EX)) {
            $db = unserialize(file_get_contents($path));
            $msg = array('login' => $_SESSION['loggued_on_user'], 'time' => time(), 'msg' => $_POST['msg']);
            $file[] = $msg;
            file_put_contents($path, serialize($file));
        }
        fclose($fp);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Speak</title>
    <script langage='javascript'>top.frames['chat'].location = 'chat.php';</script>
</head>
<body>
    <form method="post" action="speak.php">
    Message : <input type="text" name="msg">
        <input type="submit" value="OK" name="Send">
    </form>
</body>
</html>