#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$ret = array();
		$ret = array_filter(explode(' ', $argv[1]));
		foreach(array_slice($ret, 1) as $print)
			echo "$print\n";
		foreach($ret as $print)
		{
			echo "$print\n";
			break;
		}
	}
