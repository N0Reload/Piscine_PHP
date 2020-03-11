<?php
    session_start();
    if ($_GET['submit'] == "OK")
    {
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['passwd'] = $_GET['passwd'];
        echo "welcome " . $_GET['login'] . "\n";
        echo "your password is " . $_GET['passwd'] . "\n";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Pleas</title>
</head>
<body>
    <form method="get" action="index.php">
        login: <input type="text" name="login" value="<?php echo $_SESSION['login'];?>">
        <br>
        passwd: <input type="text" name="passwd" value="<?php echo $_SESSION['passwd'];?>">
        <br>
        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>

