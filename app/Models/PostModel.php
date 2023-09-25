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
    public function category()
    {
        return $this->hasMany('App\Models\PostCategoryModel','id','post_id');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Models\TagModel','post_tag','post_id','tag_id');
    }
    public function admin_post(){
        return $this->hasMany('App\Models\AdminModel','id','posted_by_admin');
    }
    public function usercheck_post(){
        
        return $this->hasMany('App\Models\UserModel','id','posted_by');
   }
   public function likes(){
    return $this->hasMany('App\LikeDislike','id','post_id')->sum('type')->where('type',1);
}
   
}
