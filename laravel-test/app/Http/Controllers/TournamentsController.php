<?php

namespace App\Http\Controllers;

use App\Models\tournaments;
use App\Http\Requests\StoretournamentsRequest;
use App\Http\Requests\UpdatetournamentsRequest;

class TournamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoretournamentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretournamentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tournaments  $tournaments
     * @return \Illuminate\Http\Response
     */
    public function show(tournaments $tournaments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tournaments  $tournaments
     * @return \Illuminate\Http\Response
     */
    public function edit(tournaments $tournaments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetournamentsRequest  $request
     * @param  \App\Models\tournaments  $tournaments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetournamentsRequest $request, tournaments $tournaments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tournaments  $tournaments
     * @return \Illuminate\Http\Response
     */
    public function destroy(tournaments $tournaments)
    {
        //
    }
}
