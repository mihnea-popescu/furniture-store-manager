<?php

namespace App\Http\Controllers;

use App\Models\Curier;
use App\Http\Requests\StoreCurierRequest;
use App\Http\Requests\UpdateCurierRequest;

class CurierController extends Controller
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
     * @param  \App\Http\Requests\StoreCurierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curier  $curier
     * @return \Illuminate\Http\Response
     */
    public function show(Curier $curier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curier  $curier
     * @return \Illuminate\Http\Response
     */
    public function edit(Curier $curier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCurierRequest  $request
     * @param  \App\Models\Curier  $curier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCurierRequest $request, Curier $curier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curier  $curier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curier $curier)
    {
        //
    }
}
