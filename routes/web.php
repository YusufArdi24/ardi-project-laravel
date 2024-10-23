<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // merujuk ke file welcome.blade.php di folder resource/views
});

Route::get('/welcome', function () {
    return view('welcome'); // menampilkan halaman menuju ke file welcome.php di folder resource/views
});

Route::get('/login', function () {
    return view('login'); // merujuk ke file welcome.blade.php di folder resource/views
});

Route::get('/about', function () {
    return view('about'); 
});