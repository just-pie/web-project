<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVyzvyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vyzvy', function (Blueprint $table) {
            $table->increments('idvyzvy');
            $table->string('nazov', 100);
            $table->text('popis');
            $table->text('ostatneinfo');
            $table->integer('pocetmiest');
            $table->text('foto');
            $table->integer('oblasti_idoblasti')->unsigned();
            $table->foreign('oblasti_idoblasti')->references('idoblasti')->on('oblasti');
            $table->integer('typ-vyzvy_idtyp-vyzvy')->unsigned();
            $table->foreign('typ-vyzvy_idtyp-vyzvy')->references('idtyp-vyzvy')->on('typvyzvy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vyzvy');
    }
}
