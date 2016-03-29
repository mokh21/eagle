<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration {

	public function up()
	{
		Schema::create('admins', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('nom');
			$table->text('email');
			$table->text('password');
			$table->text('num_tel');
			$table->string('adresse');
		});
	}

	public function down()
	{
		Schema::drop('admins');
	}
}