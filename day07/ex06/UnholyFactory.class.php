<?php

class UnholyFactory{
	
	public $refrigerator = array();

	public function absorb($material)
	{
		if ($material instanceof Fighter)
		{
				if ($material->type && isset($this->refrigerator[$material->type]))
				{
					foreach ($this->refrigerator as $key => $value)
					{
						if ($key == $material->type)
						{
							echo ("(Factory already absorbed a fighter of type ".$material->type.')'.PHP_EOL);
							return ;
						}
					}
				}
				echo ("(Factory absorbed a fighter of type ".$material->type.')'.PHP_EOL);
				$this->refrigerator[$material->type] = $material;			
		}
		else if (!$material instanceof Fighter)
		{
			echo ("(Factory can't absorb this, it's not a fighter".')'.PHP_EOL);
			return ;
		}

	}
	 
	public function fabricate($request)
	{
		if(array_key_exists($request, $this->refrigerator))
		{
			echo ("(Factory fabricates a fighter of type ".$request.')'.PHP_EOL);
			return ($this->refrigerator[$request]);
		}
		else
		{
			echo ("(Factory has't absorbed any fighter of type ".$request.')'.PHP_EOL);
			return NULL;
		}
	}
}
?>