<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/', function () {
    return view('nilai');
});
