<?php
    include('head.php');
?>    
<header>
    <section class="logo_wrapper">
    	<div class="logo">
    		<a href="index.php"><img src="imeg_src/logo2.png"></a>
    	</div>
    </section>
    <section class="nav_wrapper">
    	<nav class="categories">
    		<ul>
    			<li><a href="">Apple</a></li>
    			<li><a href="">Huawei</a></li>
    			<li><a href="">Samsung</a></li>
    			<?php
    			if(isset($_SESSION["user"]))
    			{
    				if($_SESSION["user"] == "admin")
    				{
    					echo "<li><a href='html_src/admin.php'>Admin</a></li>";
    				}
    			}
    			?>
    		</ul>
    	</nav>
    </section>
    <section class="bucket_login_wrapper">
    	<div class="bucket">
    		<button class="bucket_button"><a href="html_src/cart.php"><img src="imeg_src/shopping-cart.svg"></a></button>
    	</div>
    	<?php 
    	if (!isset($_SESSION["user"])) {
    		echo '<div class="login_wrapper">';
    		echo '<button class="authoriz"><a href="html_src/login.php">LOGIN</a></button>';
    		echo '<button class="authoriz"><a href="html_src/register.php">REGISTER</a></button>';
    	echo '</div>';
    	}
    	else {
    	echo '<div class="login_wrapper">';
    	echo	'<p>'.$_SESSION["user"]."</p>";
    	echo '</div>';
    }
    	?>
    	<form method="get" action="logout.php"><input type="submit" name="logout" value="logout"></input></form>
    </section>
</header>