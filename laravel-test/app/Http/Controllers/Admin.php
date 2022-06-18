<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
class Admin extends Controller
{
    public function GetData()
    {
        $game = Game::get();
        return view("adminHome")->with('games', $game);
    }
}
