<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;




Route::get('/', function () {
    return view('Home');
});


route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function () {
    route::get('/Home',[HomeController::class,'index'])->name('home');    
});