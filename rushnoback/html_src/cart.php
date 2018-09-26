<?php
session_start();
$hostname = 'localhost';
$username = 'root';
$passwordname = '423ps4212';
$basename = 'shopdb';
$conn = mysqli_connect($hostname, $username, $passwordname, $basename);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST["save"])){
	$_SESSION["cart"] = array();
	header("Refresh:0; url=../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" href="../css_src/cart.css" type="text/css">
</head>
<body>
	<p>Your products: </p>
	<section>
			<ul class="list">
				<?php
                        $total = 0;
						foreach ($_SESSION["cart"] as $key => $value) {
							$sql = "SELECT id, name, count, price FROM product WHERE id=".$key."";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($result)){
							    echo "<li class='prod'> NAME: ".$row["name"].", COUNT: ".$value.", PRICE: ".$value."*".$row["price"]."$.</li>";
							    $total = $total + intval($value)*intval($row["price"]);
                            }
						}
                    ?>
			</ul>
        <?php echo "<h2> TOTAL: ".$total."$.</h2>";?>
	</section>
	<form method="post" action="cart.php">
<input type="submit" name="save" value="buy" />
	
</form>
</body>
</html>