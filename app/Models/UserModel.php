<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Authenticatable 
{
    protected $guard = "uservalidate";
    protected $table = 'user';
    protected $guarded = [];
    use HasFactory;
}
