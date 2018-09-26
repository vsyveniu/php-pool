
<?php  
    session_start();
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    if (!isset($_SESSION["cart"]))
        $_SESSION["cart"] = array();
    include('html_src/header.php');
    require_once('php_src/database/connectserver.php');
    require_once('php_src/database/createdatabase.php');
    require_once('php_src/database/filltables.php');
    require_once('php_src/database/addvalues.php');
    include('html_src/article.php');
    include('html_src/footer.php');
?>
   

