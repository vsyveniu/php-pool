#!/usr/bin/env php
<?php
	if ($argc < 2)
		return 0;
	$argcount = 1;
	function ft_split($arg)
	{
		$arg = array_filter(explode(" ", $arg));
		return($arg);
	}
	$i = 0;	
	while ($argcount < $argc) 
	{	
		$arr = ft_split($argv[$argcount]);
		foreach ($arr as $value) 
		{
			$newarr[$i] = $value;
			$i++;
		}
		$argcount++;
	}
	if ($newarr != 0)
		sort($newarr);
	else
	{
		echo "0\n";
		return (0);
	}
	foreach ($newarr as $value) {
		echo "$value\n";
	}
?>