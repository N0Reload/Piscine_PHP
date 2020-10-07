<?php
    if ($_POST['submit'] !== "OK" || $_POST['login'] === null || $_POST['login'] === "" || $_POST['oldpw'] === null || $_POST['oldpw'] === ""
        || $_POST['newpw'] === null || $_POST['newpw'] === "")
    {
        echo "ERROR\n";
        return ;
    }
    $path = "/home/noreload/Desktop/Piscine_PHP/Private/passwd";
    if (file_exists($path))
    {
        $file = unserialize(file_get_contents($path));
        foreach ($file as $key => $value)
        {
            if ($value['login'] === $_POST['login'] && $value['passwd'] === hash('whirlpool', $_POST['oldpw']))
            {
                echo "actual pw : ".$value['passwd']."\nold pw : ".hash('whirlpool', $_POST['oldpw'])."\n newpw : ".hash('whirlpool', $_POST['newpw'])."\n";
                $value['passwd'] = hash('whirlpool', $_POST['newpw']);
                echo "actual pw : ".$value['passwd']."\nold pw : ".hash('whirlpool', $_POST['oldpw'])."\n newpw : ".hash('whirlpool', $_POST['newpw']);
                // tout est ok, changement de mdp fait. now need to put into fichier sinon pas modifie
            }
        }
    }