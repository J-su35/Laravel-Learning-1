<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;

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

//Laravel Command
//php artisan serve //start server
//php artisan make:controller MemberController //Making controller
//php artisan make:middleware //creating middleware

Route::get('/', function () {
    return view('welcome');
})->name('home');

// creating route
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/about', 'AboutController@index'); //version below 7
Route::get('/about',[AboutController::class,'index']); //lastest version

// Route::get('/member', function () {
//     return view('member.index');
// });
Route::get('/member/allmember',[MemberController::class,'index'])->name('member'); 

Route::get('/admin',[AdminController::class,'index'])->middleware('check'); 
// Route::get('/admin', function () {
//     return view('admin.index');
// });

// Dynamic route
Route::get('/user/{name}/{lname}', function ($name, $lname) {
    echo "<h1>Hello $name</h1>";
    echo "<h1>$lname</h1>";
});
