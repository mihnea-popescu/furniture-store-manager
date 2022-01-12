<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produs extends Model
{
    use HasFactory;
    protected $table = "Produse";

    public function producator()
    {
        return $this->hasOne(Producator::class);
    }
}
