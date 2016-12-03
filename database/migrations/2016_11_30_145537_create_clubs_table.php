<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClubsTable extends Migration {

	public function up()
	{
		Schema::create('clubs', function(Blueprint $table) {
			$table->increments('club_id');
			$table->string('club_name', 50);
			$table->binary('logo')->nullable();
			$table->string('division', 50);
            $table->text('description')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('clubs');
	}
}