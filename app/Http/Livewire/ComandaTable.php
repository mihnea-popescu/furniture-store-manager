<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Comanda;

class ComandaTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('ID','ID_Comanda')
                ->sortable(),
            Column::make('Plasata de','Plasata_De')
                ->sortable()
                ->searchable(),
            Column::make('Numar Telefon','Nr_Telefon')
                ->sortable()
                ->searchable(),
            Column::make('Adresa','Adresa')
                ->sortable()
                ->searchable(),
            Column::make('Confirmata de','Confirmata_De')
                ->sortable()
                ->searchable(),
            Column::make('Data plasare','Data_Plasare')
                ->sortable()
                ->searchable(),
            Column::make('Data confirmare','Data_Confirmare')
                ->sortable()
                ->searchable(),
            Column::make('Curier','ID_Curier')
                ->sortable()
                ->searchable(),
            Column::blank(),
        ];
    }

    public function rowView(): string
    {
        // Becomes /resources/views/location/to/my/row.blade.php
        return 'rowuri.rowcomanda';
    }

    public function query(): Builder
    {
        return Comanda::query();
    }

    public function delete($id) {
        $angajat = Comanda::find($id);
        $angajat->delete();
    }
}
