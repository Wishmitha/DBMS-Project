<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminLoginTable extends Migration
{
    public function up()
    {
        Schema::create('admin_login', function(Blueprint $table) {
            $table->increments('admin_log_id');
            $table->integer('admin_id')->unsigned();
            $table->string('username', 50);
            $table->string('password', 50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::drop('admin_login');
    }
}
