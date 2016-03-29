<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produits extends Model {

	protected $table = 'produits';
	public $timestamps = true;
	protected $fillable = [
  'prix', 'surface', 'type', 'localite', 'description', 'code_p', 'image', 'visite_virtuelle', 'residence' ];

}
