<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mention extends Model
{
    /**
     *Mass assigned variables
     * 
     * @var Array
     */
    protected $fillable = ['case_no','desc'];


}
