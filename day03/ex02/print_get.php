<?php
	$arr = $_GET;
	foreach ($arr as $key => $value)
	{
		echo $key . ": " . $value;
		echo "\n";
	}        
?>
