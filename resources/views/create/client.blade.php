@extends('master')

@section('content')

<div class="row justify-content-center">
    <div class=" col ">
      <div class="card">
        <div class="card-header bg-transparent">
          <h3 class="mb-0">Creeaza un nou client</h3>
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
                <form action="{{ route('client.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <h6 class="heading-small text-muted mb-4">Informatiile Clientului</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="nume">Nume</label>
                          <input type="text" id="nume" name="nume" class="form-control" placeholder="Nume si Prenume" >
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="email">Adresa Email</label>
                          <input type="email" id="email" name="email" class="form-control" placeholder="Email" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="telefon">Telefon</label>
                          <input type="text" id="telefon" name="telefon" class="form-control" placeholder="Nr Telefon" >
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="inregistrat-la">Inregistrat La</label>
                          <input type="text" id="inregistrat-la" name="inregistrat-la" class="form-control" placeholder="Data inregistrarii" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="adresa-default">Adresa Prestabilita</label>
                            <input type="text" id="adresa-default" name="adresa-default" class="form-control" placeholder="Adresa prestabilita" >
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="accepta-marketing">Accepta Marketing</label>
                            <input type="text" id="accepta-marketing" name="accepta-marketing" class="form-control" placeholder="0 - fals, 1 - adevarat" >
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