@extends('master')

@section('content')

<div class="row">
  <div class="col">
    
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mt-1">Comanda #{{ $comanda->ID_Comanda }} - produse</h3>
      </div>
      <!-- Light table -->
      <div class="table-responsive">
        @livewire('produse-comanda-table',['comanda' => $comanda])
      </div>
      
    </div>
  </div>
</div>

@endsection