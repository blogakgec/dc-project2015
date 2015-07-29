<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model {

	//Avoid Mass Assignment

	protected $fillable=[
	'name',
	'password'
	];




}
