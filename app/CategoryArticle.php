<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryArticle extends Model
{
    protected $fillable = [
    	'name'
    ];

    public function article()
    {
    	return $this->hasMany('App\Article');	
    }
}
