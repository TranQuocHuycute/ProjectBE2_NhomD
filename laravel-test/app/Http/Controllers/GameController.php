<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
class GameController extends Controller
{
    public function store(Request $request)
    {
        if (!isset($request->date)){
            Game::truncate();
            // get data api
        $date = date("Y-m-d");
        $urlCategories = 'https://api.sofascore.com/api/v1/sport/football/scheduled-events/'. $date;
        $data = file_get_contents($urlCategories);
        $data = json_decode($data);
        $splitString = explode("/", $urlCategories);
        $date = end($splitString);
        // for
        foreach ($data->events as $key) {
            $category = new Game();
            $category->name = $key->tournament->name;
            $category->country = $key->tournament->category->name;
            $category->HomeTeamId = $key->homeTeam->id;
            $category->HomeTeam = $key->homeTeam->name;
            $category->AwayTeamId = $key->awayTeam->id;
            $category->AwayTeam = $key->awayTeam->name;
            if (isset($key->awayScore->current)){
                $category->HomeScore= $key->homeScore->current;
                $category->AwayScore= $key->awayScore->current;
            }
            else{
                $category->HomeScore= -1;
                $category->AwayScore= -1;
            }
            $category->IncidentID = $key->id;
            $category->ScheduleDate = $date;
            $category->save();
        }
        
        }
        else{
        Game::truncate();
               
        $urlCategories = 'https://api.sofascore.com/api/v1/sport/football/scheduled-events/'.$request->date;
        $data = file_get_contents($urlCategories);
        $data = json_decode($data);
        $splitString = explode("/", $urlCategories);
        $date = end($splitString);
        // for
        foreach ($data->events as $key) {
            $category = new Game();
            $category->name = $key->tournament->name;
            $category->country = $key->tournament->category->name;
            $category->HomeTeamId = $key->homeTeam->id;
            $category->HomeTeam = $key->homeTeam->name;
            $category->AwayTeamId = $key->awayTeam->id;
            $category->AwayTeam = $key->awayTeam->name;
            if (isset($key->awayScore->current)){
                $category->HomeScore= $key->homeScore->current;
                $category->AwayScore= $key->awayScore->current;
            }
            else{
                $category->HomeScore= -1;
                $category->AwayScore= -1;
            }
            $category->IncidentID = $key->id;
            $category->ScheduleDate = $date;
            $category->save();
        }
        
        }
        $games = DB::select("SELECT * FROM `games`");
        return view("adminHome")->with('games', $games);
    } 
    public function DeleteAll()
    {
        Game::truncate();
        $games = DB::select("SELECT * FROM `games`");
        return view("adminHome")->with('games', $games);
    }
    
    public function GetGame()
    {
        $games = DB::select("SELECT * FROM `games`");
        
        return response()->json(["Message" => $games]);
    }
    //Chua hoan thanh 
    public function UpdateGame(Request $request)
    {
        echo json_encode($request->all());
        $res = Game::find($request->id);
        $res->HomeTeam = $request->HomeTeam;
        $res->HomeScore = $request->HomeScore;
        $res->AwayTeam = $request->AwayTeam;
        $res->AwayTeam = $request->AwayTeam;
        $res->save();
        $games = DB::select("SELECT * FROM `games`");
        return view("adminHome")->with('games', $games);
    }
    public function FindByID(Request $request)
    {
        $res = Game::find($request->id);
        return view("adminEdit")->with('game', $res);
    }
    public function DeleteGame(Request $request)
    {
        $res = Game::find($request->id);
        $res->delete();
        $games = DB::select("SELECT * FROM `games`");
        return view("adminHome")->with('games', $games);
    }
    //UpdateGame
    
    public function GetGameByDate(Request $request)
    {
        
        $games = DB::select("SELECT * FROM `games` WHERE games.ScheduleDate = " . $request->date);
        if (count($games) == 0){
            Game::truncate();
            $this->store($request);            
            $games = DB::select("SELECT * FROM `games` WHERE games.ScheduleDate = " . "'{$request->date}'");
            
        }
        return view("home")->with('games', $game);
    }
}