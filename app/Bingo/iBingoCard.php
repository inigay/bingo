<?php 

namespace App\Bingo;

interface iBingoCard
{
	public function isMatch($num);
	
	public function markNumber($num);
	
	public function getMarked();
}