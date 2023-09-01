<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArrayController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Models\RoleModel;


// Route::get('tagadd', function () {
//     return view('tag/tagAdd');
// });
// Route::get('array', [ArrayController::class,'index']);


// Route::get('/', function () {
//     return view('dashboard');
// });
Route::group(['middleware' => ['checkInput']], function() {
   

Route::get('category/list', [CrudController::class,'index'])->name('category.view')->middleware('CheckPermission:list_category');
Route::get('category/add', [CrudController::class,'create'])->name('category.show')->middleware('CheckPermission:add_category');
Route::post('category/create', [CrudController::class,'store'])->name('category.store')->middleware('CheckPermission:create_category');
Route::get('category/edit/{id}', [CrudController::class,'edit'])->name('category.edit')->middleware('CheckPermission:edit_category');
Route::post('category/update', [CrudController::class,'update'])->name('category.update')->middleware('CheckPermission:update_category');
Route::get('category/delete/{id}', [CrudController::class,'destroy'])->name('category.destroy')->middleware('CheckPermission:delete_category');


Route::get('tag/list', [TagController::class,'index'])->name('tag.view')->middleware('CheckPermission:list_tag');
Route::get('tag/add', [TagController::class,'create'])->name('tag.show')->middleware('CheckPermission:add_tag');
Route::post('tag/create', [TagController::class,'store'])->name('tag.store')->middleware('CheckPermission:create_tag');
Route::get('tag/edit/{id}', [TagController::class,'edit'])->name('tag.edit')->middleware('CheckPermission:edit_tag');
Route::post('tag/update', [TagController::class,'update'])->name('tag.update')->middleware('CheckPermission:update_tag');
Route::get('tag/delete/{id}', [TagController::class,'destroy'])->name('tag.destroy')->middleware('CheckPermission:delete_tag');;


Route::post('post/create', [PostController::class,'store'])->name('post.store')->middleware('CheckPermission:create_post');
Route::get('post/list', [PostController::class,'index'])->name('post.view')->middleware('CheckPermission:list_post');
Route::get('post/add', [PostController::class,'create'])->name('post.show')->middleware('CheckPermission:add_post');
Route::get('post/delete/{id}', [PostController::class,'destroy'])->name('post.destroy')->middleware('CheckPermission:delete_post');
Route::get('post/edit/{id}', [PostController::class,'edit'])->name('post.edit')->middleware('CheckPermission:edit_post');
Route::post('posts/update', [PostController::class,'update'])->name('posts.update')->middleware('CheckPermission:edit_post');



Route::post('admin/create', [AdminController::class,'store'])->name('admin.store');
Route::get('admin/list', [AdminController::class,'index'])->name('admin.view');
Route::get('admin/add', [AdminController::class,'create'])->name('admin.show');
Route::get('admin/edit/{id}', [AdminController::class,'edit'])->name('admin.edit');
Route::get('admin/delete/{id}', [AdminController::class,'destroy'])->name('admin.destroy');
Route::post('admin/roles', [AdminController::class,'show'])->name('admin.roles');

Route::get('/per', function () {
    return view('permissions/add');
});

Route::get('permission/add', [PermissionController::class,'create'])->name('permission.add');
Route::post('permission/create', [PermissionController::class,'store'])->name('permission.store');
Route::get('permission/list', [PermissionController::class,'index'])->name('permission.view');
Route::get('permission/edit/{id}', [PermissionController::class,'edit'])->name('permission.edit');
Route::get('permission/delete/{id}', [PermissionController::class,'destroy'])->name('permission.destroy');
Route::post('slug/check', [PermissionController::class,'check'])->name('slug.check');

Route::get('role/add', [RoleController::class,'create'])->name('role.add');
Route::post('role/create', [RoleController::class,'store'])->name('role.store');
Route::get('role/list', [RoleController::class,'index'])->name('role.view');
Route::get('role/edit/{id}', [RoleController::class,'edit'])->name('role.edit');
Route::get('role/delete/{id}', [RoleController::class,'destroy'])->name('role.destroy');
Route::post('role/check', [RoleController::class,'check'])->name('slug.check');
Route::post('role/permission', [RoleController::class,'show'])->name('role.permission');

 });

Route::get('/logout', [LoginController::class,'logOut'])->name('logout');
Route::post('/dashboard', [LoginController::class, 'authenticate'])->name('dashboard');

Route::get('/log', function () {
    return view('login/login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/rol', function () {
    return view('role/form');
});

Route::get('/sites', function () {
   
    return view('site/register');
});
Route::get('/listingpost', function () {
   
    return view('site/list');
});

// Route::get('/', function () {
   
//     return view('site/home');
// });

Route::post('/register', [UserController::class,'store'])->name('user.store');
Route::post('/login', [UserController::class, 'authenticate'])->name('user.login');
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/post/details/{id}', [HomeController::class,'show'])->name('post.details');
Route::get('/user/register', [HomeController::class,'register'])->name('user.register');
Route::get('/user/logout', [SiteController::class,'logOut'])->name('user.logout');
Route::get('/user/profile', [UserController::class,'show'])->name('user.profile');



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

