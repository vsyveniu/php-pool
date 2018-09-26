<?php
	
	if (!$_POST['submit'] || $_POST["submit"] != "OK" || !$_POST['login'] || !$_POST['passwd'])
	{
		echo "ERROR\n";
		return ;
	}	
		if (!file_exists("../private")){
			mkdir("../private");
		}
		if (!file_exists("../private/passwd"))
		{
			file_put_contents("../private/passwd", NULL);
		}
		$accdata = file_get_contents("../private/passwd");
		$accdata = unserialize($accdata);
		if ($accdata)
		{
			foreach ($accdata as $key => $value) 
			{
				if($value['login'] === $_POST['login']){
					echo "ERROR\n";
					return ;
				}
			}
		}
	$temp['login'] = $_POST["login"];
	$temp['passwd'] = hash("whirlpool", $_POST['passwd']);
	$accdata[] = $temp;
	$accdata = serialize($accdata);
	file_put_contents("../private/passwd", $accdata);
	echo "fuck\n";	
?>