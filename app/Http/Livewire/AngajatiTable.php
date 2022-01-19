<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AngajatiTable extends Component
{
    public $angajati;



    public function render()
    {
        return view('livewire.angajati-table')
            ->with('angajati',$this->angajati);
    }
}
