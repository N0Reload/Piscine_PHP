#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        $var = preg_replace('/\s+/', ' ', trim($argv[1]));
        printf("%s\n", $var);
    }