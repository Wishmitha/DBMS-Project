<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentActivityTable extends Migration {

	public function up()
	{
		Schema::create('student_activity', function(Blueprint $table) {
			$table->increments('stu_act_id');
			$table->integer('stu_id')->unsigned();
            $table->integer('act_id')->unsigned();
            $table->string('role');
			$table->integer('effort');
			$table->date('joined');
			$table->boolean('is_validated');
            $table->text('description')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});


	}

	public function down()
	{
		Schema::drop('student_activity');
	}
}