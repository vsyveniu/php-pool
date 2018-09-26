<?php
	$servername = "localhost";
    $user = "root";
    $password = "423ps4212";

    $conn = mysqli_connect($servername, $user, $password);


	$sql = "CREATE DATABASE IF NOT EXISTS shopdb";
	if (mysqli_query($conn, $sql)) {
		//echo "Database OK, and i shoul delete this echo in the end";
	}

?>