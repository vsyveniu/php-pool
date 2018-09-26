<?php
 if (!$_POST['submit'] || $_POST["submit"] != "OK" || !$_POST['login'] || !$_POST['oldpw'] && !$_POST['newpw'])
	{
		echo "ERROR\n";
		return ;
	}
	$accdata = unserialize("../private/passwd");
	foreach ($accdata as $key => $value) 
	{
			$old = hash("whirlpool", $_POST['oldpw']);
			if( $value['login'] === $_POST['login'] && $value['passwd'] === $old)
			{	
				$newp = hash("whirlpool", $_POST['newpw']);
				$accdata[$key]['passwd'] = $newp;
			}
			else
			{
				echo "ERROR\n";
				return ;
			}
	}
	$accdata = serialize($accdata);
	file_put_contents("../private/passwd", serialize($accdata));
	echo "OK\n";	
?>