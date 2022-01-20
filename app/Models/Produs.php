<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produs extends Model
{
    use HasFactory;
    protected $table = "Produse";
    protected $primaryKey = 'ID_Produs';
    public $timestamps = false;

    public function producator()
    {
        return $this->hasOne(Producator::class);
    }

    public function comenzi() {
        return $this->belongsToMany(Comanda::class,'produse_comenzi');
    }
}
