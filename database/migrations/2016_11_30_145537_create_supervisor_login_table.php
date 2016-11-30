<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupervisorLoginTable extends Migration {

	public function up()
	{
		Schema::create('supervisor_login', function(Blueprint $table) {
			$table->increments('sup_log_id');
			$table->integer('sup_id')->unsigned();
			$table->string('username', 50);
			$table->string('password', 50);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('supervisor_login');
	}
}