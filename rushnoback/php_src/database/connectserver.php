<?php
	$servername = "localhost";
    $user = "root";
    $password = "423ps4212";
    $name ="";
    $port = "8080";
	$conn = mysqli_connect($servername, $user, $password, $name, $port);
	if (!$conn) {
   		die("Connection error" . mysqli_connect_error());

	}
	//echo "Connection OK, and i should delete this echo in the end";
?>