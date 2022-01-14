<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Manytomany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produse_comenzi', function (Blueprint $table) {
            $table->unsignedBigInteger("ID_Comanda");
            $table->unsignedBigInteger("ID_Produs");
            $table->foreign("ID_Comanda")->references("ID_Comanda")->on("Comenzi")->onDelete("cascade");
            $table->foreign("ID_Produs")->references("ID_Produs")->on("Produse")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produse_comenzi');
    }
}
