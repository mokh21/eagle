<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailTable extends Migration {

	public function up()
	{
		Schema::create('mail', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('nom');
			$table->text('sujet');
			$table->text('contenu');
			$table->date('date_mail');
			$table->time('heure_mail');
		});
	}

	public function down()
	{
		Schema::drop('mail');
	}
}