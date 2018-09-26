#!/usr/bin/env php
<?php
	if($argc != 2)
		return ;
	function ft_split($arg)
	{
		$arg = array_filter(explode(" ", $arg));
		return($arg);
	}

	$str = $argv[1];
	$str = ft_split($str);
	foreach ($str as &$value) {
		$value .= " ";
	}
	$str2 = implode($str);
	echo "$str2\n";
?>