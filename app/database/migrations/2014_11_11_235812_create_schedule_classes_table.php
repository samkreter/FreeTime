<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScheduleClassesTable extends Migration
{

    public function up()
    {
        Schema::create('schedule_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schedule_id');
            $table->integer('class_id');
        });
    }

    public function down()
    {
        Schema::drop('schedule_classes');
    }
}