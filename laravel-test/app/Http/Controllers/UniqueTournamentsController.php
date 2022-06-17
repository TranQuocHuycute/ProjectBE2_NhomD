<?php

namespace App\Http\Controllers;

use App\Models\uniqueTournaments;
use App\Http\Requests\StoreuniqueTournamentsRequest;
use App\Http\Requests\UpdateuniqueTournamentsRequest;

class UniqueTournamentsController extends Controller
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
     * @param  \App\Http\Requests\StoreuniqueTournamentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreuniqueTournamentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\uniqueTournaments  $uniqueTournaments
     * @return \Illuminate\Http\Response
     */
    public function show(uniqueTournaments $uniqueTournaments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\uniqueTournaments  $uniqueTournaments
     * @return \Illuminate\Http\Response
     */
    public function edit(uniqueTournaments $uniqueTournaments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuniqueTournamentsRequest  $request
     * @param  \App\Models\uniqueTournaments  $uniqueTournaments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateuniqueTournamentsRequest $request, uniqueTournaments $uniqueTournaments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\uniqueTournaments  $uniqueTournaments
     * @return \Illuminate\Http\Response
     */
    public function destroy(uniqueTournaments $uniqueTournaments)
    {
        //
    }
}
