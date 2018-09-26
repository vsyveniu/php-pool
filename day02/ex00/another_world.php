#!/usr/bin/env php
<?php
	if ($argc < 1)
		return (0);
	$pattern = '/\s+/';
	if ($argv[1]) {
		$str = preg_replace($pattern, ' ', $argv[1]);
		$str = trim($str);
		echo "$str\n";
	}
?>