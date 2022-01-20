<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = "Clienti";
    protected $primaryKey = 'ID_Client';
    public $timestamps = false;

    public function comenzi()
    {
        return $this->belongsTo(Comanda::class);
    }

    public function recenzii() {
        return $this->belongsTo(Recenzie::class);
    }
}
