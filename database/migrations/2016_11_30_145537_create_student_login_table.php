<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentLoginTable extends Migration {

	public function up()
	{
		Schema::create('student_login', function(Blueprint $table) {
			$table->increments('stu_log_id');
			$table->integer('stu_id')->unsigned();
			$table->string('username', 50);
			$table->string('password', 50);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('student_login');
	}
}