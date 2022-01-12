<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clienti', function (Blueprint $table) {
            $table->id("ID_Client");
            $table->string("Nume");
            $table->string("Adresa_Default");
            $table->timestamp("Inregistrat_La")->useCurrent();
            $table->string("Email");
            $table->string("Nr_Telefon");
        });
        Schema::table('comenzi', function (Blueprint $table) {
            $table->foreign("Plasata_De")->references("ID_Client")->on("clienti")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clienti');
    }
}
