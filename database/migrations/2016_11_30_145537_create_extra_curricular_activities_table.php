<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExtraCurricularActivitiesTable extends Migration {

	public function up()
	{
		Schema::create('extra_curricular_activities', function(Blueprint $table) {
			$table->increments('activity_id');
			$table->enum('type', array('Sport', 'Club', 'Competetion'));
			$table->integer('sp_id')->unsigned()->nullable();
			$table->integer('comp_id')->unsigned()->nullable();
			$table->integer('clb_id')->unsigned()->nullable();
			$table->integer('defined_effort');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('extra_curricular_activities');
	}
}