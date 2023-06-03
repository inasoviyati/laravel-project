<?php

namespace App\Http\Controllers;

use App\Models\AttendenceStudent;
use App\Http\Requests\StoreAttendenceStudentRequest;
use App\Http\Requests\UpdateAttendenceStudentRequest;

class AttendenceStudentController extends Controller
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
     * @param  \App\Http\Requests\StoreAttendenceStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendenceStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttendenceStudent  $attendenceStudent
     * @return \Illuminate\Http\Response
     */
    public function show(AttendenceStudent $attendenceStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttendenceStudent  $attendenceStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendenceStudent $attendenceStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendenceStudentRequest  $request
     * @param  \App\Models\AttendenceStudent  $attendenceStudent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendenceStudentRequest $request, AttendenceStudent $attendenceStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttendenceStudent  $attendenceStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendenceStudent $attendenceStudent)
    {
        //
    }
}
