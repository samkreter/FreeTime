<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitiesTable extends Migration
{

    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->smallInteger('min_players');
            $table->smallInteger('max_players');
            $table->string('name', 255);
            $table->string('location', 255);
            $table->time('start');
            $table->time('end');
            $table->text('supplies')->nullable();
        });
    }

    public function down()
    {
        Schema::drop('activities');
    }
}