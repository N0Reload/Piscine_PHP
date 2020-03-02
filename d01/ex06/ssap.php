#!/usr/bin/php
<?php
    $ret = array();
    unset($argv[0]);
    foreach($argv as $str)
    {
    	$tmp = array_filter(explode(' ', $str));
    	foreach($tmp as $str2)
    		$ret[] = $str2;
    }
    sort($ret);
    foreach($ret as $print)
    	echo "$print.\n";