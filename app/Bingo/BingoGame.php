<?php 

namespace App\Bingo;

use GameCard;
use NumberCollection;
use JsonSerializable;

class BingoGame implements JsonSerializable
{
	private $numberCollection;
	private $gameCard;
	private $status;
	private $rules;
	
	public function __construct(iBingoCard $card, iNumberCollection $numCol)
	{
		$this->rules = new RuleSet();
		$this->gameCard = $card;
		$this->numberCollection = $numCol->getNumbers();
		$this->status = null;
	}
	
	public function start()
	{
		foreach($this->numberCollection as $index => $num)
		{
			if($this->gameCard->isMatch($num))
				$this->gameCard->markNumber($num);
				
			if($this->rules->checkCard($this->gameCard))
				$this->finish(true, $index);
		}	
		
		$this->finish();
	}
	
	public function finish($isWin = false, $numberShown = 75)
	{
		return $this->toJson();	
	}
	
	
	public function toJson()
	{
		
	}
	
}