<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;
use App\Models\Role;
use App\Models\Propiedad;
use App\Models\Address;


Route::get('/', function () {
    //User::with(['company', 'employee.department', 'employee.gradelevel'])->get();
    //$propiedades = Propiedad::with(['address', 'address.state', 'address.city'])->get();
    //$propiedades = Propiedad::orderBy('id','Desc')->paginate(20);
    //$users = User::with('roles')->get();
    $propiedades = Propiedad::with('address')->get();
    return view('welcome', compact('propiedades'));
});

Route::get('/welcome', function () {
    $propiedades = Propiedad::with('address')->get();
    return view('welcome', compact('propiedades'));
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

    Route::resource('reserva', \App\Http\Controllers\ReservaController::class);
});

Route::middleware(['auth:sanctum', 'verified'])->resource('/user', 'App\Http\Controllers\UserController', ['except'=>['create','store']])->names('user');


/*Route::middleware(['auth:sanctum', 'verified'])->resource('/propiedad', 'App\Http\Controllers\PropiedadController')->names('propiedad');*/
require __DIR__.'/auth.php';
