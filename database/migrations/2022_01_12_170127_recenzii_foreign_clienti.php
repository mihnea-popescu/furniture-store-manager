<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecenziiForeignClienti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recenzii', function (Blueprint $table) {
            $table->foreign("Scris_De")->references("ID_Client")->on("Clienti")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recenzii', function (Blueprint $table) {
            //
        });
    }
}
