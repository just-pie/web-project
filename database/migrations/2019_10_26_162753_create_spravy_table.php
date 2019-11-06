<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpravyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spravy', function (Blueprint $table) {
            $table->increments('idspravy');
            $table->text('text');
        });

        Schema::table('spravy', function($table) {
            $table->integer('pouzivatelia_idpouzivatelia')->unsigned();
            $table->foreign('pouzivatelia_idpouzivatelia')->references('idpouzivatelia')->on('pouzivatelia');
            $table->integer('vyzvy_idvyzvy')->unsigned();
            $table->foreign('vyzvy_idvyzvy')->references('idvyzvy')->on('vyzvy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spravy');
    }
}
