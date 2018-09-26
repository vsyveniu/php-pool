<?php
	$args = $_GET;
	if ($args["action"] == "set" && $args["name"] && $args["value"]) {
		setcookie($args["name"], $args["value"], time() +3600);
	}
	else if ($args["action"] == "get" && $_COOKIE) {
		echo $args["value"] ."\n";
	}
	else if ($args["action"] == "del")
		setcookie($args["name"], $args["value"], time() -3600);
	//print_r ($_COOKIE);
?>