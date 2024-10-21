<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



// Ruta del dashboard de administrador
Route::get('/admin', function () {
    if (Auth::check() && Auth::user()->id_rol == 2) {
        return view('welcome'); // Cargar la vista de admin
    } else {
        return redirect('/inicio');
    }})->name('admin');

    Route::get('/admindash', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
   
Route::get('/', function () {
    return view('welcome');
}) ->name('inicio'); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
Route::get('/app', function () {
    return view('app');
});
Route::get('/locales', function () {
    return view('locales');
}) ->name('locales');
Route::get('/locales-minimal', function () {
    return view('minimal');
}) ->name('minimal');
Route::get('/hombres', function () {
    return view('hombres');  // Asegúrate de que exista una vista llamada 'hombres.blade.php'
})->name('hombres');

Route::get('/mujeres', function () {
    return view('mujeres');  // Asegúrate de que exista una vista llamada 'hombres.blade.php'
})->name('mujeres');

Route::get('/ninos', function () {
    return view('ninos');  // Asegúrate de que exista una vista llamada 'hombres.blade.php'
})->name('ninos');

Route::get('/estilos', function () {
    return view('estilos');  // Asegúrate de que exista una vista llamada 'hombres.blade.php'
})->name('estilos');


require __DIR__.'/auth.php';
