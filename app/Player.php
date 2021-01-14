<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	/**
	 * The attributes that are mass assignable.
	 * 
	 * @var array
	 */
	protected $fillable = [
		'name',
		'level',
		'total_score',
		'auth_key',
	];
}
