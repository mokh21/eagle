<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residence extends Model {

	protected $table = 'residence';
	public $timestamps = true;
	  protected $fillable = [
  'nom', 'adresse', 'nb_etage', 'image', 'visite_virtuelle', 'nb_app' ];

}