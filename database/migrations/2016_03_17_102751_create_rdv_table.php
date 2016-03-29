<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRdvTable extends Migration {

	public function up()
	{
		Schema::create('rdv', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_client')->unsigned();
			$table->text('nom_client');
			$table->text('email_client');
			$table->text('num_client');
			$table->date('date_rdv');
			$table->time('heure_rdv');
		});
	}

	public function down()
	{
		Schema::drop('rdv');
	}
}