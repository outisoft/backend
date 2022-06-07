<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Role;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    $users =  User::with('roles')->orderBy('id','Desc')->paginate(10);
    return view('home',compact('users'));
})->middleware(['auth'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->resource('/user', 'App\Http\Controllers\UserController', ['except'=>['create','store']])->names('user');
require __DIR__.'/auth.php';
