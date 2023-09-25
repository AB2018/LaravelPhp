<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeDislikeModel extends Model
{
    use HasFactory;
    protected $table = 'like_dislike';
    protected $guarded = [];
}
