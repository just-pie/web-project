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
            $table->string('nadpis', 255);
            $table->text('text');
            $table->integer('users_idusers')->unsigned();
            $table->foreign('users_idusers')->references('idusers')->on('users');
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
