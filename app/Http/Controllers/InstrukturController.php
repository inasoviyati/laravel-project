<?php

namespace App\Http\Controllers;

use App\Models\instruktur;
use App\Http\Requests\StoreinstrukturRequest;
use App\Http\Requests\UpdateinstrukturRequest;

class InstrukturController extends Controller
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
     * @param  \App\Http\Requests\StoreinstrukturRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinstrukturRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function show(instruktur $instruktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function edit(instruktur $instruktur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinstrukturRequest  $request
     * @param  \App\Models\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinstrukturRequest $request, instruktur $instruktur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instruktur  $instruktur
     * @return \Illuminate\Http\Response
     */
    public function destroy(instruktur $instruktur)
    {
        //
    }
}
