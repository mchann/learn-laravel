<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DetailBeritaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('berita', [BeritaController::class,'daftarberita']);
Route::get('detailberita/{id}', [DetailBeritaController::class,'detailBerita']);