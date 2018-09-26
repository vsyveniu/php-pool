#!/usr/bin/env php
<?php
	$flow = fopen("php://stdin", "r");
	echo "Enter a number: ";
	if ($flow)
	{
		while(!feof($flow))
		{
			$str = fgets($flow);
			$str = str_replace("\n", "", $str);
			if (is_numeric($str))
			{
				if ($str % 2 == 0)
				{
					echo "The number $str is even\n";
				}
				else
				{
					echo "The number $str is odd\n";
				}
			}
			else
			{
				echo "'$str' is not a number\n";
			}	
			echo "Enter a number: ";		
		}
	}
?>