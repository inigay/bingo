<?php 

namespace App\Bingo;

class RuleSet
{
	public function checkCard(iBingoCard $card)
	{
		$markedAsString = implode('', $card->getMarked());
		
		return preg_match($this->getRulesAsPattern(), $markedAsString);
		
	}
	
	protected function getRulesAsPattern()
	{
		$ar[] = "1\d{4}1\d{4}1\d{4}1\d{4}1\d{4}";
		$ar[] = "\d{1}1\d{3}\d{1}1\d{3}\d{1}1\d{3}\d{1}1\d{3}\d{1}1\d{3}";
		$ar[] = "\d{3}1\d{1}\d{3}1\d{1}\d{3}1\d{1}\d{3}1\d{1}\d{3}1\d{1}";
		$ar[] = "\d{4}1\d{4}1\d{4}1\d{4}1\d{4}1";
		
		$ar[] = "11111\d{20}";
		$ar[] = "\d{5}11111\d{15}";
		$ar[] = "\d{15}11111\d{5}";
		$ar[] = "\d{20}11111";
		
		$ar[] = "1\d{5}1\d{11}1\d{5}1";
		$ar[] = "\d{4}1\d{3}1\d{7}1\d{3}1\d{4}";
		
		$ar[] = "1\d{3}1\d{15}1\d{3}1";
		
		return implode(" || ", $ar);
	}
	
	
}