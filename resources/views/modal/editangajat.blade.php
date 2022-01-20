@extends('master')

@section('content')

<div class="row justify-content-center">
    <div class=" col ">
      <div class="card">
        <div class="card-header bg-transparent">
          <h3 class="mb-0">Editeaza angajatul cu ID #{{ $angajat->ID_Angajat }}</h3>
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
                <form action="{{ route('angajat.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <input type="hidden" id="Angajat_ID" name="Angajat_ID" value="{{ $angajat->ID_Angajat }}">
                  <h6 class="heading-small text-muted mb-4">Informatiile Angajatului</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="nume">Nume</label>
                          <input type="text" id="nume" name="nume" class="form-control" placeholder="Username" value="{{ $angajat->Nume }}">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="email">Adresa Email</label>
                          <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ $angajat->Email }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="telefon">Telefon</label>
                          <input type="text" id="telefon" name="telefon" class="form-control" placeholder="Nr Telefon" value="{{ $angajat->Telefon }}">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="data-angajare">Data Angajare</label>
                          <input type="text" id="data-angajare" name="data-angajare" class="form-control" placeholder="Data angajare" value="{{ $angajat->Data_Angajare }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="lucreaza-pentru">Lucreaza Pentru</label>
                            <input type="text" id="lucreaza-pentru" name="lucreaza-pentru" class="form-control" placeholder="Lucreaza Pentru" value="{{ $angajat->Lucreaza_Pentru }}">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="functie">Functie</label>
                            <input type="text" id="functie" name="functie" class="form-control" placeholder="ID-ul Functiei" value="{{ $angajat->ID_Functie }}">
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