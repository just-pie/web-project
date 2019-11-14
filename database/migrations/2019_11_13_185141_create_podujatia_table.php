<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodujatiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podujatia', function (Blueprint $table) {
            $table->increments('idpodujatia');
            $table->string('nazov', 45);
            $table->date('datum');
            $table->string('miesto', 45);
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
        Schema::dropIfExists('podujatia');
    }
}
