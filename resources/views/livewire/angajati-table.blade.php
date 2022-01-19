@php
   use App\Models\Functie;
   use App\Models\Angajat; 
@endphp


<div>
    <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col" class="sort" data-sort="id">ID Angajat</th>
            <th scope="col" class="sort" data-sort="nume">Nume</th>
            <th scope="col" class="sort" data-sort="email">Email</th>
            <th scope="col" class="sort" data-sort="telefon">Telefon</th>
            <th scope="col" class="sort" data-sort="data-angajare">Data Angajare</th>
            <th scope="col" class="sort" data-sort="lucreaza-pentru">Lucreaza Pentru</th>
            <th scope="col" class="sort" data-sort="functie">Functie</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="list">
            @foreach($angajati as $angajat)
            <tr>
           
            <td class="id">
                {{ $angajat->ID_Angajat }}
            </td>
            <td class="nume">
              {{ $angajat->Nume }}
            </td>
            <td class="email">
              {{ $angajat->Email }}
            </td>
            <td class="telefon">
              {{ $angajat->Telefon }}
            </td>
            <td class="data-angajare">
              {{ $angajat->Data_Angajare }}
            </td>
            <td class="lucreaza-pentru">
                <span>{{ Angajat::find($angajat->Lucreaza_Pentru)->Nume ?? 'Nimeni' }}</span>
            </td>

            <td class="functie">
                {{-- Functie::where('ID_Functie',$angajat->Functie)->first()->Nume --}}
                
            </td>

            <td class="text-right">
              <div class="dropdown">
                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
