@extends('master')

@section('content')

<div class="row justify-content-center">
    <div class=" col ">
      <div class="card">
        <div class="card-header bg-transparent">
          <h3 class="mb-0">Editeaza comanda cu ID #{{ $comanda->ID_Comanda }}</h3>
        </div>
        <div class="card-body">
            <div class="card-body">
                @if (count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Eroare</h4>
                            <div class="alert-body">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                @endif
                @if($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Succes</h4>
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                @endif
                <form action="{{ route('comanda.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <input type="hidden" id="Comanda_ID" name="Comanda_ID" value="{{ $comanda->ID_Comanda }}">
                  <h6 class="heading-small text-muted mb-4">Informatiile Comenzii</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="plasata-de">Plasata de</label>
                          <input type="text" id="plasata-de" name="plasata-de" class="form-control" placeholder="ID-ul Clientului care a plasat comanda" value="{{ $comanda->Plasata_De }}">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="nr-telefon">Nr. Telefon</label>
                          <input type="text" id="nr-telefon" name="nr-telefon" class="form-control" placeholder="0712312301" value="{{ $comanda->Nr_Telefon }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="adresa">Adresa</label>
                          <input type="text" id="adresa" name="adresa" class="form-control" placeholder="Str. X, Nr. Y, Mun. Bucuresti, Sector 1" value="{{ $comanda->Adresa }}">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="confirmata-de">Confirmata de</label>
                          <input type="text" id="confirmata-de" name="confirmata-de" class="form-control" placeholder="ID-ul angajatului care a confirmat comanda" value="{{ $comanda->Confirmata_De }}">
                        </div>
                      </div>
                    </div>
                  <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="data-plasare">Data plasare</label>
                            <input type="text" id="data-plasare" name="data-plasare" class="form-control" placeholder="2022-01-03 17:44:22" value="{{ $comanda->Data_Plasare }}">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="data-confirmare">Data confirmare</label>
                            <input type="text" id="data-confirmare" name="data-confirmare" class="form-control" placeholder="2021-11-18 13:49:18" value="{{ $comanda->Data_Confirmare }}">
                          </div>
                        </div>
                      </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="id-curier">Curier</label>
                        <input type="text" id="id-curier" name="id-curier" class="form-control" placeholder="ID-ul Curierului care a preluat comanda" value="{{ $comanda->ID_Curier }}">
                      </div>
                    </div>
                  </div>
                  </div>
                  <button type="submit" class="btn btn-sm btn-neutral">Submit</button> 
                </form>
              </div>
        </div>
      </div>
    </div>
  </div>



@endsection