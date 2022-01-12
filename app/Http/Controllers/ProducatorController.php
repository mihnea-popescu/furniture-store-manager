<?php

namespace App\Http\Controllers;

use App\Models\Producator;
use App\Http\Requests\StoreProducatorRequest;
use App\Http\Requests\UpdateProducatorRequest;

class ProducatorController extends Controller
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
     * @param  \App\Http\Requests\StoreProducatorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducatorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producator  $producator
     * @return \Illuminate\Http\Response
     */
    public function show(Producator $producator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producator  $producator
     * @return \Illuminate\Http\Response
     */
    public function edit(Producator $producator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProducatorRequest  $request
     * @param  \App\Models\Producator  $producator
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProducatorRequest $request, Producator $producator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producator  $producator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producator $producator)
    {
        //
    }
}
