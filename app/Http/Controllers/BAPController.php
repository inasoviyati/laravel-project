<?php

namespace App\Http\Controllers;

use App\Models\BAP;
use App\Http\Requests\StoreBAPRequest;
use App\Http\Requests\UpdateBAPRequest;

class BAPController extends Controller
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
     * @param  \App\Http\Requests\StoreBAPRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBAPRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BAP  $bAP
     * @return \Illuminate\Http\Response
     */
    public function show(BAP $bAP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BAP  $bAP
     * @return \Illuminate\Http\Response
     */
    public function edit(BAP $bAP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBAPRequest  $request
     * @param  \App\Models\BAP  $bAP
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBAPRequest $request, BAP $bAP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BAP  $bAP
     * @return \Illuminate\Http\Response
     */
    public function destroy(BAP $bAP)
    {
        //
    }
}
