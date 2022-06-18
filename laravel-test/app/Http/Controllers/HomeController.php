<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
class HomeController extends Controller
{
    public function index()
    {
        $game = Game::get();
        return view("home")->with('games', $game);
    }
}
