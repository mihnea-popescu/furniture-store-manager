<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Angajat;

class AngajatTable extends DataTableComponent
{

    public string $primaryKey = 'ID_Angajat';
    public bool $offlineIndicator = false;
    
    public function columns(): array
    {
        return [
            Column::make('ID','ID_Angajat')
                ->sortable(),
            Column::make('Nume','Nume')
                ->sortable()
                ->searchable(),
            Column::make('E-mail','Email')
                ->sortable()
                ->searchable(),
            Column::make('Nr. Telefon','Telefon')
                ->sortable(),
            Column::make('Data Angajare','Data_Angajare')
                ->sortable(),
            Column::make('Lucreaza Pentru','Lucreaza_Pentru')
                ->sortable(),
            Column::make('Functie','ID_Functie')
                ->sortable()
                ->searchable(),
            Column::blank(),
        ];
    }

    public function query(): Builder
    {
        return Angajat::query();
    }
}
