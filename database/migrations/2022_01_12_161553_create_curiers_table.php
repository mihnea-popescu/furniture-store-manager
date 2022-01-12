<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curieri', function (Blueprint $table) {
            $table->id("ID_Curier");
            $table->string("Nume");
            $table->string("Locatie");
            $table->unsignedInteger("Salariu");
        });

        Schema::table('comenzi', function (Blueprint $table) {
            $table->unsignedBigInteger("ID_Curier")->default("0");
            $table->foreign("ID_Curier")->references("ID_Curier")->on("curieri");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curieri');
        Schema::table('comenzi', function (Blueprint $table) {
            Schema::dropColumn('ID_Curier');
        });
    }
}
