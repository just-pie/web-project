<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniverzityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('univerzity', function (Blueprint $table) {
            $table->increments('iduniverzity');
            $table->string('nazov', 45);
            $table->year('zmluva-od');
            $table->year('zmluva-do')->nullable($value = true);
            $table->integer('krajiny_idkrajiny')->unsigned();
            $table->foreign('krajiny_idkrajiny')->references('idkrajiny')->on('krajiny');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('univerzity');
    }
}
