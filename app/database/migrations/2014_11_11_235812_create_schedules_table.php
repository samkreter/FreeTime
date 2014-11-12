<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchedulesTable extends Migration {

	public function up()
	{
		Schema::create('schedules', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id');
			$table->integer('day_id');
		});
	}

	public function down()
	{
		Schema::drop('schedules');
	}
}