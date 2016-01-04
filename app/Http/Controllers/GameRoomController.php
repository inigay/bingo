<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\View;
use App\Bingo\BingoGame;
use App\Bingo\GameCard;
use App\Bingo\NumberCollection;

class GameRoomController extends Controller
{
    
    public function getRoom()
    {
        return View('room/roomView');
    }
    
    public function getGame()
    {
        $game  = new BingoGame(new GameCard(), new NumberCollection());
        
        return $game->start();   
    }
}
