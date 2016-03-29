<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model {

	protected $table = 'rdv';
	public $timestamps = true;
    protected $fillable = [
  'id_client', 'nom_client', 'email_client', 'num_client', 'date_rdv', 'heure_rdv' ];
}