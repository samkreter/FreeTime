<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScheduleSportsTable extends Migration
{

    public function up()
    {
        Schema::create('schedule_sports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schedule_id');
            $table->integer('sport_id');
        });
    }

    public function down()
    {
        Schema::drop('schedule_sports');
    }
}