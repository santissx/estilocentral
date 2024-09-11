<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('layouts.main');
});
Route::get('/app', function () {
    return view('app');
});

?>