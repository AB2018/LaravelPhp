<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/separate', function () {

    return view('layout.app');
});

Route::get('/add', function () {
    //  DB::insert('insert into categories (Category_Name) values (?)', ['Php']);

    // $user = DB::table('categories')->where('Category_Name', 'php')->first();
    // return $user->Category_Name;


    // DB::table('categories')->orderBy('ID')->chunk(100, function (Collection $users) {
    //     foreach ($users as $user) {
    //         echo $user;
    //         echo "<br>";
    //     }
    // });
    // DB::table('categories')->orderBy('ID')->lazy()->each(function (object $users) {
    //     foreach ($users as $title) {
    //         echo $title;
    //         echo "<br>";
    //     }
    // });

    // $users = DB::table('categories')->distinct()->get();
    // echo $users;


    // $users = DB::table('categories')
    //     ->select('ID', 'Category_Name  as Name')
    //     ->get();
    //     echo $users;
    
     
    // if (DB::table('categories')->where('Category_Name', 'test')->exists()) {
    //     echo 'True';
    //     echo "<br>";
    // }

    // $users = DB::table('categories')->count();
    // echo $users;
    // echo "<br>";

    // $titles = DB::table('categories')->pluck('Category_Name');

    // foreach ($titles as $title) {
    //     echo $title;
    //     echo "<br>";
    // }


    // $user = DB::table('categories')->find(173);
    // return $user->Category_Name;

    // $users = DB::table('categories')->get();
    // foreach ($users as $user) {
    //     echo $user->ID . ' ---  ';
    //     echo $user->Category_Name . '';
    //     echo "<br>";
    // }
    return view('add');
});
Route::get('/list', function () {
    return view('list');
});
