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

    print_r($_POST);
    if ($_POST['login'] && $_POST['password'] && $_POST['submit'] == 'OK')
    {
        $basedata = mysqli_query($conn, "SELECT * FROM users");
        while ($row = mysqli_fetch_array($basedata)) {
            if ($row['login'] == 'admin' && $_POST['login'] == 'admin') {
                $_SESSION['user'] = 'admin';
                header("Refresh:0; url=../index.php");
            }
            else if ($row['login'] != $_POST['login'])
            {
                echo "You must register";
                header("Refresh:0; url=../html_src/register.php");
            }
        }
    }
    else
    {
            header("Refresh:0; url=../html_src/login.php");
    }
?> 

