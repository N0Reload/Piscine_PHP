#!/usr/bin/php
<?php
function ret_month($month)
{
    $s = strtolower($month);
    if ($s === "janvier")
        return 1;
    else if ($s === "fevrier")
        return 2;
    else if ($s === "mars")
        return 3;
    else if ($s === "avril")
        return 4;
    else if ($s === "mai")
        return 5;
    else if ($s === "juin")
        return 6;
    else if ($s === "juillet")
        return 7;
    else if ($s === "aout")
        return 8;
    else if ($s === "septembre")
        return 9;
    else if ($s === "octobre")
        return 10;
    else if ($s === "novembre")
        return 11;
    else if ($s === "decembre")
        return 12;
    else
        return 0;
}

if ($argc > 1)
{
    if (preg_match('/([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) (3[0-1]|[0-2][0-9]|[0-9]) ([Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre) [0-9]{4} (2[0-3]|[0-1][0-9]):[0-5][0-9]:[0-5][0-9]/', $argv[1]) === 0)
        echo "Wrong Format\n";
    else
    {
        date_default_timezone_set("Europe/Paris");
        $date = explode(' ', $argv[1]);
        $hour = explode(':', $date[4]);
        echo mktime(intval($hour[0]), intval($hour[1]), intval($hour[2]), ret_month($date[2]), intval($date[1]), intval($date[3]))."\n";
    }
}