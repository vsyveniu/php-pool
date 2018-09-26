#!/usr/bin/env php
<?php
	if ($argc != 4) {
		echo "Incorrect Parameters\n";
		return (0);
	}
	foreach ($argv as &$value) {
		 $value = trim($value);
	}
	$i = 0;
	if ($argv[2] == "+") {
		echo $argv[1] + $argv[3];
		echo "\n";
	}
	else if ($argv[2] == "-") {
		echo $argv[1] - $argv[3];
		echo "\n";
	}
	else if ($argv[2] == "*") {
		echo $argv[1] * $argv[3];
		echo "\n";
	}
	else if ($argv[2] == "/" && $argv[3] == 0){
			echo "Division by zero\n";
			return (0);
		}
	else if ($argv[2] == "/") {
		echo $argv[1] / $argv[3];
		echo "\n";
	}
	else if ($argv[2] == "%") {
		echo $argv[1] % $argv[3];
		echo "\n";
	}
?>