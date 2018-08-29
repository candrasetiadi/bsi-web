<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $fillable = [
    	'name',
    	'position',
    	'biography',
    	'image',
    	'address',
    	'periode_start',
    	'periode_end',
    	'status'
    ];
}
