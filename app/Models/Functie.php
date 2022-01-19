<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Functie extends Model
{
    use HasFactory;

    protected $table = 'functii';
    protected $primaryKey = 'ID_Functie';
    protected $fillable = ['Nume','Departament','Salariu'];
    //protected $keyType = 'bigint';

    public function angajati()
    {
        return $this->hasMany(Angajat::class);
    }
}
