<?php

namespace App\Http\Controllers;

use App\Models\Standing;
use App\Http\Requests\StoreStandingRequest;
use App\Http\Requests\UpdateStandingRequest;

class StandingController extends Controller
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
     * @param  \App\Http\Requests\StoreStandingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStandingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function show(Standing $standing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function edit(Standing $standing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStandingRequest  $request
     * @param  \App\Models\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStandingRequest $request, Standing $standing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Standing  $standing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Standing $standing)
    {
        //
    }
}
