<?php

namespace App\Http\Controllers;

use App\Models\player;
use App\Http\Requests\StoreplayerRequest;
use App\Http\Requests\UpdateplayerRequest;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obj = new Player();
        $player = $obj-> get_all_data();
        return view('playerlist',['player' => $player]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreplayerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreplayerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateplayerRequest  $request
     * @param  \App\Models\player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateplayerRequest $request, player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(player $player)
    {
        //
    }
}
