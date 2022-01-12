<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angajat extends Model
{
    use HasFactory;

    protected $table = "angajati";

    public function comenzi()
    {
        return $this->belongsTo(Comanda::class);
    }
}
