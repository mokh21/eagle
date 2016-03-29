<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model {

	protected $table = 'admins';
	public $timestamps = true;
    protected $fillable = [
  'nom', 'email', 'password', 'num_tel', 'adresse' ];
}