<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('extra_curricular_activities', function(Blueprint $table) {
			$table->foreign('sp_id')->references('sport_id')->on('sports')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('extra_curricular_activities', function(Blueprint $table) {
			$table->foreign('comp_id')->references('competition_id')->on('competitions')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('extra_curricular_activities', function(Blueprint $table) {
			$table->foreign('clb_id')->references('club_id')->on('clubs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('student_activity', function(Blueprint $table) {
			$table->foreign('stu_id')->references('student_id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('student_activity', function(Blueprint $table) {
			$table->foreign('act_id')->references('activity_id')->on('extra_curricular_activities')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('student_login', function(Blueprint $table) {
			$table->foreign('stu_id')->references('student_id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('supervisor_login', function(Blueprint $table) {
			$table->foreign('sup_id')->references('supervisor_id')->on('supervisors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('supervisor_activity', function(Blueprint $table) {
			$table->foreign('sup_id')->references('supervisor_id')->on('supervisors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('supervisor_activity', function(Blueprint $table) {
			$table->foreign('act_id')->references('activity_id')->on('extra_curricular_activities')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('achievements', function(Blueprint $table) {
			$table->foreign('act_id')->references('activity_id')->on('extra_curricular_activities')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('achievements', function(Blueprint $table) {
			$table->foreign('stu_id')->references('student_id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});

	}

	public function down()
	{
		Schema::table('extra_curricular_activities', function(Blueprint $table) {
			$table->dropForeign('extra_curricular_activities_sp_id_foreign');
		});
		Schema::table('extra_curricular_activities', function(Blueprint $table) {
			$table->dropForeign('extra_curricular_activities_comp_id_foreign');
		});
		Schema::table('extra_curricular_activities', function(Blueprint $table) {
			$table->dropForeign('extra_curricular_activities_clb_id_foreign');
		});
		Schema::table('student_activity', function(Blueprint $table) {
			$table->dropForeign('student_activity_stu_id_foreign');
		});
		Schema::table('student_activity', function(Blueprint $table) {
			$table->dropForeign('student_activity_act_id_foreign');
		});
		Schema::table('student_login', function(Blueprint $table) {
			$table->dropForeign('student_login_stu_id_foreign');
		});
		Schema::table('supervisor_login', function(Blueprint $table) {
			$table->dropForeign('supervisor_login_sup_id_foreign');
		});
		Schema::table('supervisor_activity', function(Blueprint $table) {
			$table->dropForeign('supervisor_activity_sup_id_foreign');
		});
		Schema::table('supervisor_activity', function(Blueprint $table) {
			$table->dropForeign('supervisor_activity_act_id_foreign');
		});
		Schema::table('achievements', function(Blueprint $table) {
			$table->dropForeign('achievements_act_id_foreign');
		});
		Schema::table('achievements', function(Blueprint $table) {
			$table->dropForeign('achievements_stu_id_foreign');
		});

	}
}