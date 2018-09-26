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
            if ($row['login'] != $_POST['login']) {
                mysqli_query($conn, "INSERT INTO users (login, password, permissions)
                SELECT * FROM (SELECT '$_POST['login']', '$_POST['password']', '0') AS 
                tmp WHERE NOT EXISTS (SELECT login FROM users WHERE login = '$_POST['login']')LIMIT 1");
                $_SESSION['user'] = $_POST['login'];
                header("Refresh:0; url=../index.php");
            }
            else if ($row['login'] == $_POST['login'])
            {
                $_SESSION['user'] = $_POST['login'];
                header("Refresh:0; url=../html_src/register.php");
            }
        }
    }
?> 
