<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Client;

class ClientTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('ID','ID_Client')
                ->sortable(),
            Column::make('Nume','Nume')
                ->sortable()
                ->searchable(),
            Column::make('Adresa Principala','Adresa_Default')
                ->sortable()
                ->searchable(),
            Column::make('Inregistrat La','Inregistrat_La')
                ->sortable(),
            Column::make('E-mail','Email')
                ->sortable()
                ->searchable(),
            Column::make('Nr. Telefon','Nr_Telefon')
                ->sortable()
                ->searchable(),
            Column::make('Accepta Marketing','Accepta_Marketing')
                ->sortable(),
        ];
    }

    public function rowView(): string
    {
        // Becomes /resources/views/location/to/my/row.blade.php
        return 'rowuri.rowclient';
    }

    public function query(): Builder
    {
        return Client::query();
    }

    public function delete($id) {
        $angajat = Client::find($id);
        $angajat->delete();
    }
}
