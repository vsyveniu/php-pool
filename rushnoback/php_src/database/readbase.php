<?php
	$servername = "localhost";
    $user = "root";
    $password = "423ps4212";
    $name = "shopdb";
    $port = "8080";
	$conn = mysqli_connect($servername, $user, $password, $name, $port);
	if (!$conn) {
   		die("Ошибка подключения: " . mysqli_connect_error());
	}
	//echo "Успешное подключение";
?>