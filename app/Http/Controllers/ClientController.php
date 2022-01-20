<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clienti');
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
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    public function showEdit($id) {
        $angajat = Client::find($id);
        if(!$angajat) return abort(404);

        return view('edit.client')
            ->with('client',$angajat);

    }

    public function postEdit(Request $request) {
        $request->validate([
            'nume' => ['string','max:40','min:3','required'],
            'email' => ['email','required'],
            'telefon' => ['string','max:15','min:7','required'],
            'inregistrat-la' => ['date','required'],
            'adresa-default' => ['string','required','max:150','min:5'],
            'accepta-marketing' => ['integer','required'],
        ]);

        $client = Client::find($request->input('Client_ID'));

        $client->Nume = $request->nume;
        $client->Adresa_Default = $request->input('adresa-default');
        $client->Inregistrat_La = $request->input('inregistrat-la');
        $client->Email = $request->email;
        $client->Nr_Telefon = $request->input('telefon');
        $client->Accepta_Marketing = $request->input('accepta-marketing');

        $client->save();

        return back()
            ->with('client',$client)
            ->with('success','Modificarile tale au fost efectuate cu succes.');
    }

    public function nou() {
        return view('create.client');
    }

    public function nouCreate(Request $request) {
        $request->validate([
            'nume' => ['string','max:40','min:3','required'],
            'email' => ['email','required'],
            'telefon' => ['string','max:15','min:7','required'],
            'inregistrat-la' => ['date','required'],
            'adresa-default' => ['string','required','max:150','min:5'],
            'accepta-marketing' => ['integer','required'],
        ]);

        $client = new Client;

        $client->Nume = $request->nume;
        $client->Adresa_Default = $request->input('adresa-default');
        $client->Inregistrat_La = $request->input('inregistrat-la');
        $client->Email = $request->email;
        $client->Nr_Telefon = $request->input('telefon');
        $client->Accepta_Marketing = $request->input('accepta-marketing');

        $client->save();

        return back()
            ->with('success','Modificarile tale au fost efectuate cu succes. A fost creat clientul cu ID #'.$client->ID_Client.'.');
    }
}
