<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['name',];

    public function post()
    {
        return $this->belongsToMany('App\Models\PostModel','post_category','category_id','post_id');
    }
}
