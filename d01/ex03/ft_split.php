#!/usr/bin/php
<?php
    function ft_split($str)
    {
        return ($split = explode( ' ', preg_replace('/\s\s+/', ' ', trim($str))));
    }