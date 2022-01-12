<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curier extends Model
{
    use HasFactory;
    protected $table = "Curieri";

    public function livrari()
    {
        return $this->belongsTo(Comanda::class);
    }
}
