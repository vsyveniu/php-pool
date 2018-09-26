<?php
	
	function ft_split($arg)
	{
		$arg = array_filter(explode(" ", $arg));
		sort($arg);
		return($arg);
	}
?>