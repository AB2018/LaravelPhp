<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $guarded = [];
    
    public function post_tag(){
        return $this->hasMany('App\Models\PostTagModel','post_id');
    }
    public function post_category(){
        return $this->hasMany('App\Models\PostCategoryModel','post_id');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Models\TagModel','post_tag','post_id','tag_id');
    }
}
