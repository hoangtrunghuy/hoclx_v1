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
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->integer('user_level')->nullable();
            $table->integer('user_status')->nullable();
            $table->string('user_firstName')->nullable();
            $table->string('user_lastName')->nullable();
            $table->string('user_birth')->nullable();
            $table->string('user_adress')->nullable();
            $table->string('user_img')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
