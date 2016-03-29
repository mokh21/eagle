<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandesTable extends Migration {

	public function up()
	{
		Schema::create('commandes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_client');
			$table->text('code_type');
			$table->text('dossier');
		});
	}

	public function down()
	{
		Schema::drop('commandes');
	}
}