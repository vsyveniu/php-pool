<?php
    session_start();
    $servername = "localhost";
    $user = "root";
    $password = "423ps4212";
    $dbname = "shopdb";

    $conn = mysqli_connect($servername, $user, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_GET['logout']) {
        session_destroy();
         header("Refresh:0; url=index.php");
    }
?> 

