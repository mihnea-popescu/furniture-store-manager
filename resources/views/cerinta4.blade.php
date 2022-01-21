@extends('master')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mt-1">Cerinta 4</h3>
      </div>
      <!-- Light table -->
      <div class="table-responsive">
        @php
            $query = DB::select('select ID_Functie,count(*) as numaratoare from `angajati` group by `ID_Functie` having `ID_Functie` > 5');
                        //dd($query);
            @endphp
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="id">ID Functie</th>
                <th scope="col" class="sort" data-sort="nume">Nr angajati</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
                @foreach($query as $angajat)
                <tr>
               
                <td class="id">
                    {{ $angajat->ID_Functie}}
                </td>
                <td class="nume">
                  {{ $angajat->numaratoare}}
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