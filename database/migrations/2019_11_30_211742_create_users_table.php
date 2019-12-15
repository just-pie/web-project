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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->date('birth_date');
            $table->string('study_program', 40);
            $table->string('password');
            $table->boolean('isAdmin')->nullable();
            $table->string('foto', 50);
            $table->rememberToken();
            $table->timestamps();
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
        Schema::dropIfExists('users');
    }
}
