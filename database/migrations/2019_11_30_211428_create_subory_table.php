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
            $table->integer('typ-suboru_idtyp-suboru')->unsigned();
            $table->foreign('typ-suboru_idtyp-suboru')->references('idtyp-suboru')->on('typsuboru');
            $table->integer('spravy_idspravy')->unsigned();
            $table->foreign('spravy_idspravy')->references('idspravy')->on('spravy');
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
