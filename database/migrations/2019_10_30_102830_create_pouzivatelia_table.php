<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePouzivateliaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pouzivatelia', function (Blueprint $table) {
            $table->increments('idpouzivatelia');
            $table->string('priezvisko', 45);
            $table->string('meno', 45);
            $table->string('email', 50)->unique();
        });

       Schema::table('pouzivatelia', function($table) {
        $table->integer('roly_idroly')->unsigned();
        $table->foreign('roly_idroly')->references('idroly')->on('roly');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pouzivatelia');
    }
}
