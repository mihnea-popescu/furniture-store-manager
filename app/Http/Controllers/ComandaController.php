<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComandaRequest;
use App\Http\Requests\UpdateComandaRequest;

class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('comenzi');
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
     * @param  \App\Http\Requests\StoreComandaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComandaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function show(Comanda $comanda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function edit(Comanda $comanda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComandaRequest  $request
     * @param  \App\Models\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComandaRequest $request, Comanda $comanda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comanda  $comanda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comanda $comanda)
    {
        //
    }

    public function showEdit($id) {
        $angajat = Comanda::find($id);
        if(!$angajat) return abort(404);

        return view('edit.comanda')
            ->with('comanda',$angajat);

    }

    public function postEdit(Request $request) {
        $request->validate([
            'plasata-de' => ['integer','required','exists:clienti,ID_Client'],
            'nr-telefon' => ['string','required','min:5','max:15'],
            'adresa' => ['string','required','min:5','max:150'],
            'confirmata-de' => ['integer', 'nullable', 'exists:angajati,ID_Angajat'],
            'data-plasare' => ['date','required'],
            'data-confirmare' => ['date','nullable'],
            'id-curier' => ['integer','nullable','exists:curieri,ID_Curier'],
        ]);

        $comanda = Comanda::find($request->input('Comanda_ID'));

        $comanda->Plasata_De = $request->input('plasata-de');
        $comanda->Nr_Telefon = $request->input('nr-telefon');
        $comanda->Adresa = $request->input('adresa');
        $comanda->Confirmata_De = $request->input('confirmata-de');
        $comanda->Data_Plasare = $request->input('data-plasare');
        $comanda->Data_Confirmare = $request->input('data-confirmare');
        $comanda->ID_Curier = $request->input('id-curier');

        $comanda->save();

        return back()
            ->with('comanda',$comanda)
            ->with('success','Modificarile tale au fost efectuate cu succes.');
    }

    public function nou() {
        return view('create.comanda');
    }

    public function nouCreate(Request $request) {
        $request->validate([
            'plasata-de' => ['integer','required','exists:clienti,ID_Client'],
            'nr-telefon' => ['string','required','min:5','max:15'],
            'adresa' => ['string','required','min:5','max:150'],
            'confirmata-de' => ['integer', 'nullable', 'exists:angajati,ID_Angajat'],
            'data-plasare' => ['date','required'],
            'data-confirmare' => ['date','nullable'],
            'id-curier' => ['integer','nullable','exists:curieri,ID_Curier'],
        ]);

        $comanda = new Comanda;

        $comanda->Plasata_De = $request->input('plasata-de');
        $comanda->Nr_Telefon = $request->input('nr-telefon');
        $comanda->Adresa = $request->input('adresa');
        $comanda->Confirmata_De = $request->input('confirmata-de');
        $comanda->Data_Plasare = $request->input('data-plasare');
        $comanda->Data_Confirmare = $request->input('data-confirmare');
        $comanda->ID_Curier = $request->input('id-curier');

        $comanda->save();

        return back()
            ->with('comanda',$comanda)
            ->with('success','Modificarile tale au fost efectuate cu succes. A fost creata comanda cu ID #'.$comanda->ID_Comanda);
    }
}
