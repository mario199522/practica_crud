<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productomodel extends Model
{
	public $timestamps = false;
	protected $table='productos1'; 
    protected $fillable=[
    	'nombre','precio','cantidad',];
}
