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
            $table->string('dlzka', 45);
            $table->text('ostatneinfo');
            $table->date('pridane');
            $table->date('platnedo');
            $table->text('foto');
            $table->integer('oblasti_idoblasti')->unsigned();
            $table->foreign('oblasti_idoblasti')->references('idoblasti')->on('oblasti');
            $table->integer('typvyzvy_idtypvyzvy')->unsigned();
            $table->foreign('typvyzvy_idtypvyzvy')->references('idtypvyzvy')->on('typvyzvy');
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
