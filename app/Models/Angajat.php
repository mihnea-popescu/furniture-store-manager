<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angajat extends Model
{
    use HasFactory;

    protected $table = "angajati";
    protected $primaryKey = 'ID_Angajat';

    public function comenzi()
    {
        return $this->belongsTo(Comanda::class);
    }

    public function functie()
    {
        return $this->belongsTo(Functie::class);
    }
}
