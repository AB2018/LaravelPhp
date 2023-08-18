<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    use HasFactory;
    protected $table = 'tag';
    protected $fillable = ['tag_name',];
    public function post()
    {
        return $this->belongsToMany('App\Models\PostModel','post_tag','tag_id','post_id');
    }
}
