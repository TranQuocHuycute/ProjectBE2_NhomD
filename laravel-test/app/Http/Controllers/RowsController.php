<?php

namespace App\Http\Controllers;

use App\Models\Rows;
use App\Http\Requests\StoreRowsRequest;
use App\Http\Requests\UpdateRowsRequest;

class RowsController extends Controller
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
     * @param  \App\Http\Requests\StoreRowsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRowsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rows  $rows
     * @return \Illuminate\Http\Response
     */
    public function show(Rows $rows)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rows  $rows
     * @return \Illuminate\Http\Response
     */
    public function edit(Rows $rows)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRowsRequest  $request
     * @param  \App\Models\Rows  $rows
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRowsRequest $request, Rows $rows)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rows  $rows
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rows $rows)
    {
        //
    }
}
