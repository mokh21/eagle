<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResidenceTable extends Migration {

	public function up()
	{
		Schema::create('residence', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('nom');
			$table->text('adresse');
			$table->integer('nb_etage');
			$table->text('image');
			$table->text('visite_virtuelle');
			$table->integer('nb_app');
		});
	}

	public function down()
	{
		Schema::drop('residence');
	}
}