<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use App\Http\Controllers\CrudController;



Route::get('test', [CrudController::class,'create'])->name('flights.store');






//Route::get('/insert', [CrudController::class,'create'])->name('flights.show') ;  

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

