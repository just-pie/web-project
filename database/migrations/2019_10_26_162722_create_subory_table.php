<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuboryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subory', function (Blueprint $table) {
            $table->increments('idsubory');
            $table->string('adresa', 45);
            $table->string('nazov', 45);
        });

        Schema::table('subory', function($table) {
            $table->integer('spravy_idspravy')->unsigned();
            $table->foreign('spravy_idspravy')->references('idspravy')->on('spravy');
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
        Schema::dropIfExists('subory');
    }
}
