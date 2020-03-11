<?php
    echo "welcome".$_GET["login"]."\n";
    echo "and password".$_GET["passwd"]."\n";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Pleas</title>
</head>
<body>
    <form method="get" action="index.php">
        login: <input type="text" name="login"><br>
        passwd: <input type="text" name="passwd"><br>
        <input type="submit">
    </form>
</body>
</html>