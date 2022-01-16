<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Functii extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Functii', function (Blueprint $table) {
            $table->id("ID_Functie");
            $table->string("Nume")->default("");
            $table->string("Departament")->default("");
            $table->integer("Salariu")->default("0");
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Functii');
        
    }
}
