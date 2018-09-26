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

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    if ($_GET['login'] && $_GET['password'] && $_GET['submit'] == 'OK')
    {
        $basedata = mysqli_query($conn, "SELECT * FROM users");
        while ($row = mysqli_fetch_array($basedata))
        {
            if ($row['login'] != $_GET['login']) {
                $sql = "INSERT INTO MyGuests (login, password, permissions)
                VALUES ('$_GET', '$_GET', '0')";

                $_SESSION['user'] = $_GET['login'];
                header("Refresh:0; url=index.php");
            }
            else if ($row['login'] == $_GET['login'])
            {
                $_SESSION['user'] = $_GET['login'];
                header("Refresh:0; url=index.php");
            }
        }
    }
    else
    {
        header("Refresh:0; url=index.php");
    }
?> 
