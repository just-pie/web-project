<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniverzityHasVyzvyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('univerzity_has_vyzvy', function (Blueprint $table) {
            $table->string('pocetmiest', 5)->nullable($value = true);
        });

        Schema::table('univerzity_has_vyzvy', function($table) {
            $table->integer('univerzity_iduniverzity')->unsigned();
            $table->foreign('univerzity_iduniverzity')->references('iduniverzity')->on('univerzity');
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
        Schema::dropIfExists('univerzity_has_vyzvy');
    }
}
