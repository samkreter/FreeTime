<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScheduleActivitiesTable extends Migration
{

    public function up()
    {
        Schema::create('schedule_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('schedule_id');
            $table->integer('activity_id');
        });
    }

    public function down()
    {
        Schema::drop('schedule_activities');
    }
}