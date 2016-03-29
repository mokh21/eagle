<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model {

	protected $table = 'commandes';
	public $timestamps = true;
    protected $fillable = [
  'id_client', 'code_type', 'dossier' ];
}