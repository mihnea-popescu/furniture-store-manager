@extends('master')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mt-1">Cerinta 3</h3>
      </div>
      <!-- Light table -->
      <div class="table-responsive">
        @php
            $query = DB::select('select `angajati`.*, `functii`.`Nume`, `comenzi`.`ID_Comanda` from `angajati` inner join `functii` on `angajati`.`ID_Functie` = `functii`.`ID_Functie` inner join `comenzi` on `angajati`.`ID_Angajat` = `comenzi`.`Confirmata_De` where year(`angajati`.`Data_Angajare`) = 2021 and `comenzi`.`ID_Comanda` > 3');
        @endphp
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="id">ID Angajat</th>
                <th scope="col" class="sort" data-sort="nume">ID Functie</th>
                <th scope="col" class="sort" data-sort="pret">ID Comanda</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
                @foreach($query as $angajat)
                <tr>
               
                <td class="id">
                    {{ $angajat->ID_Angajat}}
                </td>
                <td class="nume">
                  {{ $angajat->ID_Functie }}
                </td>
                <td class="pret">
                  {{ $angajat->ID_Comanda }}
                </td>
                
                
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
      <!-- Card footer -->
      <div class="card-footer py-4">
        
      </div>
    </div>
  </div>
</div>

@endsection