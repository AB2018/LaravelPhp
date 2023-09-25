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
       //dd($value,$slug);
        if (in_array($slug, $value)) {
         //   dd("hhh");
            return true;
        } else {
            return false;
        }
        // $exists = Arr::exists($value, $route);
        // return $exists;  
    }
    return false;
}

function dateFormat($date,$formate){
    
  return  \Carbon\Carbon::parse($date)->format($formate);

}
