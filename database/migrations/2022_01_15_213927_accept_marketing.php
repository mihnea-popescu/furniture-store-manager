<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AcceptMarketing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clienti', function (Blueprint $table) {
            $table->integer("Accepta_Marketing")->default("0");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clienti', function (Blueprint $table) {
            $table->dropColumn("Accepta_Marketing");
        });
    }
}
