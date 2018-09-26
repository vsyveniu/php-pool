<?php
	function ft_is_sort($tab)
	{
		if(!is_array($tab))
		{
			echo "The argument is not an array\n";
			exit (0);
		}
		$newarr = $tab;
		sort($newarr);
		if ($newarr === $tab)
			return(TRUE);
		else
			return(FALSE);
	}
?>