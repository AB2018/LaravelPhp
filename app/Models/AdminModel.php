<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class AdminModel extends Authenticatable 
{
    use HasFactory;
    protected $table = 'admin';
    protected $guarded = [];
    public function roles()
    {
        return $this->belongsToMany('App\Models\RoleModel','admin_roles','admin_id','role_id');
    }
}
