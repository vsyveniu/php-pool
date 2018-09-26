#!/usr/bin/env php
<?php
	if ($argc < 2)
		return 0;
	function ft_split($arg)
	{
		$arg = array_filter(explode(" ", $arg));
		return($arg);
	}
	$arr = ft_split($argv[1]);
	$i = 0;
	if (empty($arr))
		return (0);
	else
	{
		foreach ($arr as $value) 
		{
			$newarr[$i] = $value;
			$i++;
		}
		foreach ($newarr as &$value) {
			$value .= " ";
		}
		$i = 1;
		while ($i <= count($newarr)){
			echo "$newarr[$i]";
			$i++;
		}
		rtrim($newarr[0]);
		echo "$newarr[0]";
		echo "\n";

	}
?>