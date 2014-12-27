<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration {

	public function up()
	{
		Schema::create('teachers', function($table)
		{
			$table->increments('id');
			$table->string('nombre', 20);
			$table->string('email', 40);
		});
	}

	public function down()
	{
		Schema::drop('teachers');
	}

}
