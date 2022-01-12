<?php

namespace App\Http\Controllers;

use App\Models\Produs;
use App\Http\Requests\StoreProdusRequest;
use App\Http\Requests\UpdateProdusRequest;

class ProdusController extends Controller
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
     * @param  \App\Http\Requests\StoreProdusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produs  $produs
     * @return \Illuminate\Http\Response
     */
    public function show(Produs $produs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produs  $produs
     * @return \Illuminate\Http\Response
     */
    public function edit(Produs $produs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdusRequest  $request
     * @param  \App\Models\Produs  $produs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdusRequest $request, Produs $produs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produs  $produs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produs $produs)
    {
        //
    }
}
