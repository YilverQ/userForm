<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttendanceController;

Route::get('/welcome-laravel', function () {
    return view('welcome');
});


/*
    HTTP    URI    Método       Descripción
    ---------------------------------------
    get     /      index        Inicio de la aplicación
*/
Route::controller(LoginController::class)->group(function (){
    Route::get('/', 'index')->name('login.index');

    Route::get('/login', 'login')->name('login.login');
    Route::post('/login', 'loginCheck')->name('login.loginCheck');
    
    Route::get('/signup', 'signup')->name('login.signup');
    Route::post('/signup', 'createUser')->name('login.createUser');
});


Route::controller(AdminController::class)->group(function (){
    Route::get('/admin', 'index')->name('admin.index');
});

Route::controller(ClassController::class)->group(function (){
    Route::get('/class/create', 'create')->name('class.create');
    Route::post('/class/create', 'store')->name('class.store');
    Route::get('/class/show/{item}', 'show')->name('class.show');
});