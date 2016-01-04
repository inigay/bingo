<?php 

namespace App\Bingo;

use iBingoCard;

class GameCard implements iBingoCard, JsonSerializable
{
	private $numbers;
	private $indexes;
	
	public function __construct()
	{
		$this->indexes = array_fill(1,25, 0);
	}
	
	private function generateCardNumbers()
	{
		for($i = 1; $i <= 25; $i++){
			$maxNum = $i * 15;
			$curRange = range($maxNum - 14, $maxNum);
			shuffle($curRange);
			
			for($k = 0; $k < 5; $k++){
				$numIndex = $k * 5 + 1;
				$this->numbers[$numIndex] = $curRange[$k];
			}
		}
		
		$this->numbers[13] = null;
		$this->indexes[13] = null;
		$this->numbers = array_flip($this->numbers); 
	}
	
	public function isMatch($number)
	{
		return isset($this->numbers[$number]);
	}
	
	public function markNumber($number)
	{
		if($this->isMatch($number)){
			$this->indexes[$this->numbers[$number]] = 1;
		}
	}
	
	public function getMarked()
	{
		return $this->indexes;
	}
	
	public function toJson()
	{
		return json_encode(array_flip($this->numbers));
	}
	
}