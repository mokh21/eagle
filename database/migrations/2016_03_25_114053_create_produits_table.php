<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProduitsTable extends Migration {

	public function up()
	{
		Schema::create('produits', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('prix');
			$table->integer('surface');
			$table->string('type', 3);
			$table->text('localite');
			$table->string('description', 50);
			$table->text('code_p');
			$table->text('image');
			$table->text('visite_virtuelle');
			$table->text('residence');
		});
	}

	public function down()
	{
		Schema::drop('produits');
	}
}