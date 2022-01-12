<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecenziiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recenzii', function (Blueprint $table) {
            $table->id("ID_Recenzie");
            $table->unsignedBigInteger("Scris_De");
            $table->unsignedInteger("Nota");
            $table->string("Titlu");
            $table->string("Continut");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recenzii');
    }
}
