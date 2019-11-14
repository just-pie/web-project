<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
            $table->timestamps();
        });
        Schema::table('pouzivatelia', function($table) {
            $table->integer('roly_idroly')->unsigned();
            $table->foreign('roly_idroly')->references('roly_idroly')->on('roly');
        });
<<<<<<< HEAD:database/migrations/2019_11_13_235916_create_users_table.php
=======

>>>>>>> master:database/migrations/2019_11_13_185223_create_pouzivatelia_table.php
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
