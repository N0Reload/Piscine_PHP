<?php
    session_start();
    if ($_GET['submit'] === 'OK')
    {
        if ($_GET['login'] != null)
            $_SESSION['login'] = $_GET['login'];
        if ($_GET['passwd'] != null)
            $_SESSION['passwd'] = $_GET['passwd'];
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
        login : <input type="text" name="login" value="<?php echo $_SESSION['login'];?>">
        <br>
        password : <input type="password" name="passwd" value="<?php echo $_SESSION['passwd'];?>">
        <br>
        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>