<?php
    if ($_SERVER['PHP_AUTH_USER'] === "zaz" && $_SERVER['PHP_AUTH_PW'] === "jaimelespetitsponeys")
    {
        $file = base64_encode(file_get_contents("../ressources/42.png"));
        echo "<html><body>\nBonjour Zaz<br />\n<img src='data:image/png;base64,".$file."'</body></html>";
    }
    else
    {
        header("WWW-Authentificate: Basic realm=''Espace members''");
        header("HTTP/1.0 401 Unauthorized");
        echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
    }