<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produse', function (Blueprint $table) {
            $table->id("ID_Produs");
            $table->string("Nume");
            $table->unsignedDouble("Pret");
            $table->unsignedDouble("Pret_Redus");
            $table->string("Categorie");
            $table->timestamp("Data_Adaugare");
            $table->timestamp("Data_Modificare");
            $table->unsignedBigInteger("ID_Producator");
            $table->foreign("ID_Producator")->references("ID_Producator")->on("Producatori")->onDelete("cascade");
        });
        Schema::table('recenzii', function (Blueprint $table) {
            $table->unsignedBigInteger("ID_Produs");
            $table->foreign('ID_Produs')->references("ID_Produs")->on("Produse")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Produse');
        Schema::table('recenzii',function (Blueprint $table) {
            $table->dropColumn('ID_Produs');
        });
    }
}
