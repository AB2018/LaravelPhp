<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\Exists;

function checkSlug($slug)
{
    if (session()->has('user')) {
        //dd('call');
        $value = session()->get('user.permission');
      //  dd($slug);
        if (in_array($slug, $value)) {
            return true;
        } else {
            return false;
        }
        // $exists = Arr::exists($value, $route);
        // return $exists;  
    }
    return false;
}
