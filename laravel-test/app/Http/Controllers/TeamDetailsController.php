<?php

namespace App\Http\Controllers;
use App\Models\player;
use App\Models\Rows;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

// '
// SELECT DISTINCT teams.name FROM `rows` INNER JOIN teams ON rows.team_id = teams.id WHERE teams.tournaments_id = 626
// '

    }
    public function getTeam(){


        $obj = new Player();
        $player = $obj-> get_all_data();
        // $teams = Team::get_all_team ();
        $rows = Rows::join('teams', 'rows.team_id', '=', 'teams.id')
        ->where('teams.tournaments_id',626)->distinct()
        ->get(['teams.*', 'teams.name']);

        return view('teamdetail',['player' => $player],['rows' => $rows]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
