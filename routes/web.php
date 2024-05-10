<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrarseController;
use App\Http\Controllers\CompañiaController;
use App\Http\Controllers\InformacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',[HomeController::class,'create']);
Route::post('/guardar', [HomeController::class,'store'])->name('guardar.store');
Route::get('/home',[HomeController::class,'index'])->name('inicio.index');

//registrarse

Route::get('/registrarse',[RegistrarseController::class,'create']);
Route::post('/entrar', [RegistrarseController::class,'store'])->name('entrar.store');
Route::get('/bienvenido',[RegistrarseController::class,'index'])->name('entrar.index');

//compañías

Route::get('/acerca',[CompañiaController::class,'createAcerca']);
Route::get('/privacidad',[CompañiaController::class,'createPrivacidad']);
Route::get('/términos',[CompañiaController::class,'createTérminos']);
Route::get('/nosotros',[CompañiaController::class,'createLeerMás']);

Route::get('/guardar-informacion', [InformacionController::class, 'formularioInfo']);
Route::post('/guardar-informacion', [InformacionController::class, 'guardar'])->name('guardar.informacion');





