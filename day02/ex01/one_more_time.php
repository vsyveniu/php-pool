#!/usr/bin/env php
<?php

	function ft_split($arg)
	{
		$arg = array_filter(explode(" ", $arg));
		return($arg);
	}
	function ft_getmonth($str)
	{
		$month = 0;
		($str == "janvier" || $str == "Janvier") ? $month = 1 : 0;
		($str == "fevrier" || $str == "Fevrier") ? $month = 2 : 0;
		($str == "mars" || $str == "Mars") ? $month = 3 : 0;
		($str == "avril" || $str == "Avril") ? $month = 4 : 0;
		($str == "mai" || $str == "Mai") ? $month = 5 : 0;
		($str == "juin" || $str == "Juin") ? $month = 6 : 0;
		($str == "juillet" || $str == "Juillet") ? $month = 7 : 0;
		($str == "aout" || $str == "Aout") ? $month = 8 : 0;
		($str == "septembre" || $str == "Septembre") ? $month = 9 : 0;
		($str == "octobre" || $str == "Octobre") ? $month = 10 : 0;
		($str == "novembre" || $str == "Novembre") ? $month = 11 : 0;
		($str == "decembre" || $str == "Decembre") ? $month = 12 : 0;
		return ($month);
	}
	date_default_timezone_set('Europe/Paris');
	if ($argc < 1)
		return (0);
	if (empty($argv[1]))
		return (0);
	$pattern = "/^(?:[l,L]undi|[m,M]ardi|[m,M]ercredi|[j,J]eudi|[v,V]endredi|[s,S]amedi|[d,D]imanche)\s([1-9]|[1-2][\d]|3[0-1])\s(?:[j,J]anvier|[f,F]evrier|[m,M]ars|[a,A]vril|[m,M]ai|[j,J]uin|[j,J]uillet|[a,A]out|[s,S]eptembre|[o,O]ctobre|[n,N]ovembre|[d,D]ecembre)\s[0-9][0-9][0-9][0-9]\s[012][0-9]:[0-5][0-9]:[0-5][0-9]$/";
	if (preg_match($pattern, $argv[1]))
	{
		$arr = ft_split($argv[1]);
		$month = ft_getmonth($arr[2]);
		$timearr = explode(":", $arr[4]);
		$seconds = mktime($timearr[0], $timearr[1], $timearr[2], $month, $arr[1], $arr[3]);
		echo "$seconds\n";

	}
	else
	{
		echo "Wrong Format\n";
		return (0);
	}
?>