<?php
	include('head.php');
	if (isset($_GET['buy'])) {
		$_SESSION["cart"][$_GET['id']] = $_GET['count'];
	}
	$servername = "localhost";
    $user = "root";
    $password = "423ps4212";
    $dbname = "shopdb";

    $conn = mysqli_connect($servername, $user, $password, $dbname);
    if (!$conn) {
   		die("Connection failed: " . mysqli_connect_error());
	}
	$basedata = mysqli_query($conn, "SELECT * FROM product");
	?>
<article>
    <aside class="type">
    	<ul>
    	<li><a href="">Cheap</a></li>
    	<li><a href="">Expansive</a></li>
    	<li><a href="">For SWAG</a></li>
    	<li><a href="">For retards</a></li>
    </ul>
    </aside>
    <section class="maincontent">


	<?php while($row = mysqli_fetch_array($basedata))
	{
		
       ?><div class="item">
        	<p class="name"><?php echo $row['name']?></p>
        	<div class="img"><img src="imeg_src/iphone/iphone_6.jpg"></div>
        	<div class="meta_wrapper">
        	<p class="count"><?php echo $row['count']?></p>
         	<p class="price"><?php echo $row['price']?></p>	
        	</div>
        	<p class="description">This this a god damn best IsuckPHONE you ever want to own!</p>
        	<div class="buy_wrapper"><form method="get" action="index.php"> <input type="text" class="hidden" value=<?php echo $row['id'] ?> name="id"><input type="text" name="count"  value="1"><input class="buy" name="buy" type = "submit" value="buy"></input></form></div>
        </div>


    <?php }
    ?>

    </section>
</article>