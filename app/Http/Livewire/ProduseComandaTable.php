<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Produs;
use App\Models\Comanda;

class ProduseComandaTable extends DataTableComponent
{
    public Comanda $comanda;
    
    
    public function columns(): array
    {
        return [
            Column::make('Column Name'),
        ];
    }

    public function query(): Builder
    {
        return Produs::query();
    }
}
