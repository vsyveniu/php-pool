<?php
	class Lannister
	{
		public function sleepWith($slut)
		{
			if (is_a($this, Jaime) and is_a($slut, Tyrion)) 
			{
				echo ("Not even if I'm drunk !".PHP_EOL);
			}
			if (is_a($this, Jaime) and is_a($slut, Sansa))
			{
				echo ("Let's do this.".PHP_EOL);
			}
			if (is_a($this, Jaime) and is_a($slut, Cersei))
			{
				echo ("With pleasure, but only in a tower in Winterfell, then.".PHP_EOL);
			}
			if (is_a($this, Tyrion) and is_a($slut, Jaime)) 
			{
				echo ("Not even if I'm drunk !".PHP_EOL);
			}
			if (is_a($this, Tyrion) and is_a($slut, Sansa)) 
			{
				echo ("Let's do this.".PHP_EOL);
			}
			if (is_a($this, Tyrion) and is_a($slut, Cersei)) 
			{
				echo ("Not even if I'm drunk !".PHP_EOL);
			}
		}
	}
?>