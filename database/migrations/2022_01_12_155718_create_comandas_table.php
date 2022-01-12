<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comenzi', function (Blueprint $table) {
            $table->id("ID_Comanda");
            $table->unsignedBigInteger("Plasata_De");
            $table->string("Nr_Telefon");
            $table->string("Adresa");
            $table->unsignedBigInteger("Confirmata_De")->default("0");
            $table->foreign("Confirmata_De")->references("ID_Angajat")
                ->on("Angajati");

            //$table->foreign("Plasata_De")

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comenzi');
    }
}
