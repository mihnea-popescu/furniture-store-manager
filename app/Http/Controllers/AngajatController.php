<?php

namespace App\Http\Controllers;

use App\Models\Angajat;
use App\Http\Requests\StoreAngajatRequest;
use App\Http\Requests\UpdateAngajatRequest;
use Illuminate\Http\Request;

class AngajatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $angajati = Angajat::all();
        return view('angajati')
            ->with('angajati',$angajati);
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
     * @param  \App\Http\Requests\StoreAngajatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAngajatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Angajat  $angajat
     * @return \Illuminate\Http\Response
     */
    public function show(Angajat $angajat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Angajat  $angajat
     * @return \Illuminate\Http\Response
     */
    public function edit(Angajat $angajat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAngajatRequest  $request
     * @param  \App\Models\Angajat  $angajat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAngajatRequest $request, Angajat $angajat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Angajat  $angajat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Angajat $angajat)
    {
        //
    }

    public function showEdit($id) {
        $angajat = Angajat::find($id);
        if(!$angajat) return abort(404);

        return view('modal.editangajat')
            ->with('angajat',$angajat);

    }

    public function postEdit(Request $request) {
        $request->validate([
            'nume' => ['string','max:40','min:3','required'],
            'email' => ['email','required'],
            'telefon' => ['string','max:15','min:7','required'],
            'data-angajare' => ['date','required'],
            'lucreaza-pentru' => ['integer','required','nullable'],
            'functie' => ['required','exists:functii,ID_Functie']
        ]);

        $angajat = Angajat::find($request->input('Angajat_ID'));

        $angajat->Nume = $request->input('nume');
        $angajat->Email = $request->email;
        $angajat->Telefon = $request->telefon;
        $angajat->Data_Angajare = $request->date('data-angajare');
        $angajat->Lucreaza_Pentru = $request->input('lucreaza-pentru');
        $angajat->ID_Functie = $request->functie;

        $angajat->save();

        return back()
            ->with('angajat',$angajat)
            ->with('success','Modificarile tale au fost efectuate cu succes.');
    }

    public function nou() {
        return view('create.angajat');
    }

    public function nouCreate(Request $request) {
        $request->validate([
            'nume' => ['string','max:40','min:3','required'],
            'email' => ['email','required'],
            'telefon' => ['string','max:15','min:7','required'],
            'data-angajare' => ['date','required'],
            'lucreaza-pentru' => ['integer','required','nullable'],
            'functie' => ['required','exists:functii,ID_Functie']
        ]);

        $angajat = new Angajat;

        $angajat->Nume = $request->input('nume');
        $angajat->Email = $request->email;
        $angajat->Telefon = $request->telefon;
        $angajat->Data_Angajare = $request->date('data-angajare');
        $angajat->Lucreaza_Pentru = $request->input('lucreaza-pentru');
        $angajat->ID_Functie = $request->functie;

        $angajat->save();

        return back()
            ->with('angajat',$angajat)
            ->with('success','Modificarile tale au fost efectuate cu succes. Angajatul cu ID #'.$angajat->ID_Angajat.' a fost creat.');
    }
}
