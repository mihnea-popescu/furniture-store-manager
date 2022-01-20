<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;
    protected $table = "Comenzi";
    protected $primaryKey = 'ID_Comanda';
    public $timestamps = false;

    public function angajat()
    {
        return $this->hasOne(Angajat::class);
    }

    public function curier()
    {
        return $this->hasOne(Curier::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function produse()
    {
        return $this->belongstoMany(Produs::class,'produse_comenzi','ID_Comanda','ID_Produs');
    }
}
