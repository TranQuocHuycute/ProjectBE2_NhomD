<?php

namespace App\Http\Controllers;

use App\Models\player;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\PlayerSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Team;
use App\Models\Rows;
class TeamDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function getTeam()
    {


        $obj = new Player();
        $player = $obj-> get_all_data();
        // $teams = Team::get_all_team ();
        $rows = Rows::join('teams', 'rows.team_id', '=', 'teams.id')
        ->where('teams.tournaments_id',626)->distinct()
        ->get(['teams.*', 'teams.name','teams.id']);

        return view('teamdetail',['player' => $player],['rows' => $rows]);
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Rows::destroy($id);
        return redirect(route("playerdetail"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $player =  Player::find($id);


        $player->player->name = $request->name;
        $player->player->slug = $request->slug;
        $player->player->shortName = $request->shortName;
        $player->player->position = $request->position;
        $player->player->userCount = $request->userCount;
        $player->player->update();
    }


        //
    }


}
