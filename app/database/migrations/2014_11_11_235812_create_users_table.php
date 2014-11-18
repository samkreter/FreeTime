<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('username', 255);
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('password', 255);
            $table->date('dob');
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}