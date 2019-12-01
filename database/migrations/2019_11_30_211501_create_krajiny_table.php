<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKrajinyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krajiny', function (Blueprint $table) {
            $table->increments('idkrajiny');
            $table->string('krajina', 100);
            $table->string('kontinent', 100);
            $table->string('gps_cord_lat', 45);
            $table->string('gps_cord_long', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krajiny');
    }
}
