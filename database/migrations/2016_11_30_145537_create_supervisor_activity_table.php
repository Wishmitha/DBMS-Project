<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupervisorActivityTable extends Migration {

	public function up()
	{
		Schema::create('supervisor_activity', function(Blueprint $table) {
			$table->increments('sup_act_id');
			$table->integer('sup_id')->unsigned();
			$table->integer('act_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('supervisor_activity');
	}
}