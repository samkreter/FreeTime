<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassesTable extends Migration {

	public function up()
	{
		Schema::create('classes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 255);
			$table->string('instructor', 255);
			$table->time('start');
			$table->time('end');
		});
	}

	public function down()
	{
		Schema::drop('classes');
	}
}