<?php

	class NightsWatch
	{
		public $squad = [];
		public function recruit($soldier)
		{
			array_push($this->squad, $soldier);
			print_r($squad);
		}

		public function fight()
		{
			foreach ($this->squad as $value)
			{
				if ($value instanceof IFighter)
				$value->fight();
			}
		}
	}	
?>