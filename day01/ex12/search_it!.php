#!/usr/bin/env php
<?php

	function ft_pos($str)
	{
		$i = 0;
		while ($str[$i] != ":")
			$i++;
		return($i);	
	}
	if ($argc < 1)
		return (0);

	$i = 2;
	$j = 0;
	if (empty($argv))
		return (0);
	else
	{
		while ($i < $argc)
		{
			$newarr[$j] = $argv[$i];
			$i++;
			$j++;
		}
	}	
	$i = 0;

	while($i < count($newarr))
	{
		$pos = ft_pos($newarr[$i]);
		$tmp = substr($newarr[$i], 0, $pos);
		$tmp2 = substr($newarr[$i], $pos + 1);
		if ($tmp == $argv[1])
		{
			$res = $tmp2;
		}
		$i++;
	}
	if ($res) {
		echo "$res\n";
	}
?>