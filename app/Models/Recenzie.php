<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recenzie extends Model
{
    use HasFactory;

    protected $table = "Recenzii";

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function produs()
    {
        return $this->hasOne(Produs::class);
    }
}
