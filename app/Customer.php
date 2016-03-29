<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
public function Orders(){

	return $this->hasMany('App\Order');
}
}