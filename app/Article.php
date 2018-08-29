<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'category_id',
    	'title',
    	'slug',
    	'description',
    	'image',
    	'content',
    	'tag',
    	'creator',
    	'created_by',
    	'publish_date',
    	'publish_by',
    	'update_by',
    	'status'
    ];

    public function category()
    {
    	return $this->belongsTo('App\CategoryArticle');	
    }

    public function tag()
    {
    	return $this->belongsToMany('App\Tag');	
    }
}
