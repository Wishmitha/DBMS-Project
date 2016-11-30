<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupervisorsTable extends Migration {

	public function up()
	{
		Schema::create('supervisors', function(Blueprint $table) {
			$table->increments('supervisor_id');
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('field', 100);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('supervisors');
	}
}