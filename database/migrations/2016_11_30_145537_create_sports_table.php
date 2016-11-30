<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSportsTable extends Migration {

	public function up()
	{
		Schema::create('sports', function(Blueprint $table) {
			$table->increments('sport_id');
			$table->string('sport_name', 50);
			$table->string('team', 50);
			$table->binary('logo');
			$table->text('description');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('sports');
	}
}