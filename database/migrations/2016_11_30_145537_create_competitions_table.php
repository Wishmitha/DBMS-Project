<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetitionsTable extends Migration {

	public function up()
	{
		Schema::create('competitions', function(Blueprint $table) {
			$table->increments('competition_id');
			$table->string('competitiopn_name', 50);
			$table->binary('logo');
			$table->string('host', 60);
			$table->text('description');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('competitions');
	}
}