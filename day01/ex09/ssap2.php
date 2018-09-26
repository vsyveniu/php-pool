#!/usr/bin/env php
<?php
	if ($argc < 2)
		return 0;
	function ft_split($arg)
	{
		$arg = array_filter(explode(" ", $arg));
		return($arg);
	}
	function dumbsort($a, $b)
	{
		$i = 0;
		$a = strtolower($a);
		$b = strtolower($b);
		while ($a[$i] === $b[$i]) {
			$i++;
		}
		if($a == $b)
			return (0);
		else if (ctype_alpha($a[$i]) and !ctype_alpha($b[$i])){
			return (-1);
		}
		elseif (is_numeric($a[$i]) and !ctype_alpha($b[$i]) and !is_numeric($b[$i])) {
			return (-1);
		}
		elseif (ctype_alpha($b[$i]) and !ctype_alpha($a[$i])) {
			return (1);
		}
		elseif (is_numeric($b[$i]) and !is_numeric($a[$i]) and !ctype_alpha($a[$i])) {
			return (1);
		}
		elseif ($a[$i] < $b[$i]) {
			return (-1);
		}
		else if ($a[$i] > $b[$i]) {
			return (1);
		}
		return (0);
	}
	$argcount = 1;
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
	if (empty($newarr))
		return (0);
	usort($newarr, "dumbsort");
	foreach ($newarr as $value) {
		echo "$value\n";
	}
?>