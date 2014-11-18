<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSportsTable extends Migration
{

    public function up()
    {
        Schema::create('sports', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->smallInteger('min_players');
            $table->smallInteger('max_players');
            $table->string('name', 255);
            $table->time('start');
            $table->time('end');
        });
    }

    public function down()
    {
        Schema::drop('sports');
    }
}