<?php

use App\Http\Controllers\ArrayController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;


Route::get('listing', [CrudController::class,'index'])->name('category.view');
Route::get('test', [CrudController::class,'create'])->name('category.show');
Route::post('insert', [CrudController::class,'store'])->name('category.store');
Route::get('edit/{id}', [CrudController::class,'edit'])->name('category.edit');
Route::post('update', [CrudController::class,'update'])->name('category.update');
Route::get('delete/{id}', [CrudController::class,'destroy'])->name('category.destroy');

Route::get('add', function () {
    return view('category/add');
});
Route::get('tags', [TagController::class,'index'])->name('tag.view');
Route::get('tagtest', [TagController::class,'create'])->name('tag.show');
Route::post('tag/create', [TagController::class,'store'])->name('tag.store');
Route::get('tag/edit/{id}', [TagController::class,'edit'])->name('tag.edit');
Route::post('tag/update', [TagController::class,'update'])->name('tag.update');
Route::get('tag/delete/{id}', [TagController::class,'destroy'])->name('tag.destroy');

Route::get('tagadd', function () {
    return view('tag/tagAdd');
});
Route::get('post/create', function () {
    return view('post/addPost');
});
Route::get('post/create', [PostController::class,'getCategory']);
Route::post('post/insert', [PostController::class,'store'])->name('post.store');
Route::get('post/list', [PostController::class,'index'])->name('post.view');
Route::get('post/show', [PostController::class,'create'])->name('post.show');
Route::post('post/update', [PostController::class,'update'])->name('posts.update');
Route::get('post/delete/{id}', [PostController::class,'destroy'])->name('post.destroy');
Route::get('post/edit/{id}', [PostController::class,'edit'])->name('post.edit');

Route::post('posts/update', [PostController::class,'update'])->name('posts.update');

Route::get('array', [ArrayController::class,'index']);



// Route::post('store', [CrudController::class,'create'])->name('flights.store');
    //  DB::insert('insert into categories (Category_Name) values (?)', ['Php']);

    // $user = DB::table('cat')->find(3);
    // dd($user);
    // return $user->Category_Name;
    //$arr = [];



    // DB::table('categories')->orderBy('ID')->chunk(3, function (Collection $users) {

    //     foreach ($users as $user) {
    //         echo $user->Category_Name;
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


    // $users = DB::table('categories')->where('Category_Name','php')->first();
    // print_r($users) ;
    // echo "<br>";



    // $titles = DB::table('categories')->select('Category_Name','Created_Date','ID')->get();

    // foreach ($titles as $a =>$b) {
    //     echo $a.'-'.$b->Category_Name;
    //     echo "<br>";

    // }   dd($titles);


    // $user = DB::table('categories')->find(173);
    // return $user->Category_Name;

    // $users = DB::table('categories')->get();
    // foreach ($users as $user) {
    //     echo $user->ID . ' ---  ';
    //     echo $user->Category_Name . '';
    //     echo "<br>";
    // }

    // $users = DB::table('categories')
    //          ->select(DB::raw('count(*) as user_count, ID'))
    //          ->where('ID', '<>', 1)
    //          ->groupBy('ID')
    //          ->get();
    //        


    // $orders = DB::table('orders')
    //             ->whereRaw('price > IF(state = "TX", ?, 100)', [200])
    //             ->get();
    //             echo $orders;      
    // \DB::connection()->enableQueryLog();
    // $users = DB::table('Products')
    // ->select('Product_Name', 'Price')
    // ->get();
    // echo $users;
    // $query = \DB::getQueryLog();
    // dd($query);

    // DB::table('Products')
    //     ->join('categories', function (JoinClause $join) {
    //         $join->on('Products.Category', '=', 'categories.ID')->orOn(/* ... */);
    //     })
    //     ->get();
    // $users = DB::table('Products')
    //     ->where('Price', '>', 100)
    //     ->orWhere('Product_Name', 'Mysql2')
    //     ->get();
    // echo $users;

    // \DB::connection()->enableQueryLog();
    // $users = DB::table('Products')
    //     ->join('categories', 'Products.Category', '=', 'categories.ID')
    //     ->select('Products.*', 'categories.Created_Date')
    //     ->get();
    // echo $users;


    // $users = DB::table('Products')
    //     ->leftJoin('categories', 'Products.Category', '=', 'categories.ID')
    //     ->get();
    // echo $users;
    // $query = \DB::getQueryLog();
    // dd($query);

    // \DB::connection()->enableQueryLog();
    // $users = DB::table('Products')
    //     ->where('Price', '=', 80)
    //     ->where('Price', '>', 35)
    //     ->get();
    // echo $users;
    // $query = \DB::getQueryLog();
    //  dd($query);

