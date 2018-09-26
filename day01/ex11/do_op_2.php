#!/usr/bin/env php
<?php

	function ft_split($arg)
	{
		$arg = array_filter(explode(" ", $arg));
		return($arg);
	}

	function parseop($tab)
	{
		foreach ($tab as $value)
		{
			if (ctype_alpha($value) || (!is_numeric($value) and $value != "+" 
				and $value != "-" and $value != "/" and $value != "*" and $value != "%"))
			{
				echo "Syntax Error\n";
				return (0);
			}
		}		
	return (1);
	}

	function do_op($newarr)
	{
		if(count($newarr) > 3){
			echo "Syntax Error\n";
			return (0);
		}
		if ($newarr[2] == 0 && $newarr[1] == "/"){
			echo "Division by zero\n";
			return (0);
		}
		if ($newarr[0] == 0 && $newarr[2] == 0){
			echo "0\n";
			return (0);
		}
		if ($newarr[1] == "+") {
			echo $newarr[0] + $newarr[2];
			echo "\n";
		}
		else if ($newarr[1] == "-") {
			echo $newarr[0] - $newarr[2];
			echo "\n";
		}
		else if ($newarr[1] == "*") {
			echo $newarr[0] * $newarr[2];
			echo "\n";
		}
		else if ($newarr[1] == "/") {
			echo $newarr[0] / $newarr[2];
			echo "\n";
		}
		else if ($newarr[1] == "%") {
			echo $newarr[0] % $newarr[2];
			echo "\n";
		}

	}

	if ($argc != 2) 
	{
		echo "Incorrect Parameters\n";
		return (0);
	}
	$str = trim($argv[1]);
	$arr = ft_split($str);
	if (empty($arr))
		return (0);
	else
	{
		$i = 0;
		foreach ($arr as $value) 
		{
			$newarr[$i] = $value;
			$i++;
		}
	}
	if(parseop($newarr))
		do_op($newarr);
?>