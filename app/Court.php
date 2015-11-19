<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
	/**
	 * Mass assignable fields
	 * 
	 * @var Array
	 */
   	protected  $fillable = ['name','location'];

   	/**
   	 * A court has many rooms
   	 * 
   	 * @return [App\Room] [Returns the rooms in that court]
   	 */
   	public function rooms()
   	{
   		return $this->hasMany('App\Room');
   	}

   	/**
   	 * A court has many mentions served through a room
   	 * 
   	 * @return [App\Room] [Mentions in a given court]
   	 */
   	public function mentions()
   	{
   		return $this->hasManyThrough('App\Room','App\Mention');
   	}
}
