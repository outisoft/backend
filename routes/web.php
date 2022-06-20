<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Role;
use App\Models\Propiedad;

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
    $propiedades = Propiedad::orderBy('id','Desc')->paginate(20);
    return view('welcome', compact('propiedades'));
});

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

Route::get('/home', function () {
    $users =  User::with('roles')->orderBy('id','Desc')->paginate(10);
    return view('home',compact('users'));
})->middleware(['auth'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);

    Route::resource('propiedad', \App\Http\Controllers\PropiedadController::class);

    Route::resource('address', \App\Http\Controllers\AddressController::class);
});

Route::middleware(['auth:sanctum', 'verified'])->resource('/user', 'App\Http\Controllers\UserController', ['except'=>['create','store']])->names('user');


/*Route::middleware(['auth:sanctum', 'verified'])->resource('/propiedad', 'App\Http\Controllers\PropiedadController')->names('propiedad');*/
require __DIR__.'/auth.php';
