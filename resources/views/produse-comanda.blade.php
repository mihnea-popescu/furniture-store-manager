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
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col" class="sort" data-sort="id">ID Produs</th>
              <th scope="col" class="sort" data-sort="nume">Nume</th>
              <th scope="col" class="sort" data-sort="pret">Pret</th>
              <th scope="col" class="sort" data-sort="pret-redus">Pret redus</th>
              <th scope="col" class="sort" data-sort="categorie">Categorie</th>
              <th scope="col" class="sort" data-sort="data-adaugare">Data Adaugare</th>
              <th scope="col" class="sort" data-sort="data-modificare">Data Modificare</th>
              <th scope="col" class="sort" data-sort="producator">Producator</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="list">
              @foreach($comanda->produse as $produs)
              <tr>
             
              <td class="id">
                  {{ $produs->ID_Produs}}
              </td>
              <td class="nume">
                {{ $produs->Nume }}
              </td>
              <td class="pret">
                {{ $produs->Pret }}
              </td>
              <td class="pret-redus">
                {{ $produs->Pret_Redus }}
              </td>
              <td class="categorie">
                {{ $produs->Categorie }}
              </td>
              <td class="data-adaugare">
                {{ $produs->Data_Adaugare }}
              </td>
              <td class="data-modificare">
                {{ $produs->Data_Modificare }}
              </td>
              <td class="producator">
                {{ $produs->ID_Producator }}
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
      <!-- Card footer -->
      <div class="card-footer py-4">
        <nav aria-label="...">
          <ul class="pagination justify-content-end mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <i class="fas fa-angle-left"></i>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">
                <i class="fas fa-angle-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

@endsection