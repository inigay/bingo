<?php
namespace App\Bingo;

use iNumberCollection;

class NumberCollection implements iNumberCollection
{
	
	public function getNumbers()
	{
		$ar = range(1, 75);
		shaffle($ar);
		
		return \SplFixedArray::fromArray($ar);
	}
	
} 