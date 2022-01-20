<x-livewire-tables::bs4.table.cell>
    {{ $row->ID_Comanda }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->Plasata_De }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->Nr_Telefon }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->Adresa }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->Confirmata_De }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->Data_Plasare }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->Data_Confirmare }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    {{ $row->ID_Curier }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
    <div class="dropdown">
        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-ellipsis-v"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
          <a class="dropdown-item" href="{{ route('comanda.produse',['id'=>$row->ID_Comanda]) }}">Vezi produsele comandate</a>
          <a class="dropdown-item" href="{{ route('comanda.edit',['id'=>$row->ID_Comanda]) }}">Editeaza</a>
          <a class="dropdown-item" href="#" wire:click.prevent="delete({{ $row->ID_Comanda }})">Sterge</a>
        </div>
      </div>
</x-livewire-tables::bs4.table.cell>