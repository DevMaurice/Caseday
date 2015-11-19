<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{	
	/**
	 * Mass Assigned fields
	 * @var Array
	 */
    $fillable = ['room_no','capacity'];
    /**
     * A room belongs to a court
     * 
     * @return App\Court
     */
    public function court()
    {
    	return $this->belongsTo('App\Court');
    }
    /**
     * A room will hold many Mentions
     * 
     * @return App\Mention Metion class
     */
    public function cases()
    {
    	return $this->hasMany('App\Mention');
    }
}
