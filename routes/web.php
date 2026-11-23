<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'hai';
});

Route::get('/home/{param1}/{param2}', function ($param1, $param2) {
    return 'hai '.$param1.$param2;
});

Route::get('/nama/{nama}/umur/{umur}', function ($nama, $umur) {
    return 'Nama saya ' . $nama . ' dan umur saya ' . $umur;
});

Route::get('/{param1}', [PegawaiController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});


