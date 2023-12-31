<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategoryModel extends Model
{
    use HasFactory;
    protected $table = 'post_category';
    protected $guarded = [];
}
