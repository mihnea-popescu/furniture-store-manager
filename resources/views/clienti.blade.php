@extends('master')

@section('content')

<div class="row">
  <div class="col">
    
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mt-1">Table - Clienti</h3> <a href="{{ route('client.new') }}" class="btn btn-sm btn-neutral">Nou</a> 
      </div>
      <!-- Light table -->
      <div class="table-responsive">
        <livewire:client-table />
      </div>
      
    </div>
  </div>
</div>

@endsection