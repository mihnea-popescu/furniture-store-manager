<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Functie extends Model
{
    use HasFactory;

    protected $table = "Functii";

    public function angajati()
    {
        return $this->belongsTo(Angajat::class);
    }
}
