<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('layouts.main');
}) ->name('inicio');    
Route::get('/app', function () {
    return view('app');
});
Route::get('/locales', function () {
    return view('locales');
}) ->name('locales');
?>