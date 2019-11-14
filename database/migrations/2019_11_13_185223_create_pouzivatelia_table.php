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
            $table->string('meno');
            $table->string('priezvisko');
            $table->string('email');
            $table->date('datum_narodenia');
            $table->string('login');
            $table->string('heslo', 60);
            $table->integer('roly_idroly')->unsigned();
            $table->foreign('roly_idroly')->references('idroly')->on('roly');
            $table->timestamps();
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
