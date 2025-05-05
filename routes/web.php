<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login',[PageController::class, 'tampilkanLoginPage']);
Route::post('/login',[PageController::class, 'login']);


Route::get('/dashboard', [PageController::class, 'tampilkanDashboard'])->name('dashboard');

Route::get('/pengelolaan',[PageController::class, 'tampilkanPengelolaan']);

Route::post('/profile',[PageController::class, 'tampilkanProfile'])->name('profile');

Route::get('/logout',[PageController::class, 'logout']);


