<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model {

	protected $table = 'mail';
	public $timestamps = true;
	protected $fillable = [
  'nom', 'sujet', 'contenu', 'date_mail', 'heure_mail' ];

}