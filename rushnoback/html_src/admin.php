<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css_src/normalize.css" type="text/css">
    <link rel="stylesheet" href="../css_src/header.css" type="text/css">
    <link rel="stylesheet" href="../css_src/footer.css" type="text/css">
     <link rel="stylesheet" href="../css_src/main.css" type="text/css">
     <link rel="stylesheet" href="../css_src/media.css" type="text/css">
    <link rel="stylesheet" href="../login.css" type="text/css">
    <title>Title</title>
</head>
<?php
include("header.php");
$hostname = 'localhost';
$username = 'root';
$passwordname = '423ps4212';
$basename = 'shopdb';
$conn = mysqli_connect($hostname, $username, $passwordname, $basename);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['save'])) {
	$count = strip_tags(trim($_POST['count']));
	$id = $_POST["id"];
	$price = $_POST["price"];
	mysqli_query($conn, " UPDATE product SET count=$count WHERE id=$id");
	mysqli_query($conn, " UPDATE product SET price=$price WHERE id=$id");}

$sql = "SELECT id, name, count, price FROM product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "<div>";
		echo 'Name:' .$row['name '] . '    ';
		echo 'quantity:' . $row['count'] . ' price:';
		echo $row['price']. '$';
		echo "</div>";
		echo '<form method="post" action="admin.php">';

		echo '<input type="text" name="count" value='.$row["count"].' />';
		echo '<input style="display:none;" type="text" name="id" value='.$row["id"].' />';
		echo '<input type="text" name="price" value='.$row["price"].' />';
		echo '<input type="submit" name="save" value="change" ><br /><br />';

		echo '</form>';
		}
	}
 else {
	echo "0 results";
}
mysqli_close();
?>