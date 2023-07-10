<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Client\ClientDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Menagere\MenagereDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [HomeController::class, 'index'])->name('home');


//Pour le client
Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/client/dashboard', [ClientDashboardController::class, 'index'])->name('client.dashboard');
});




//Pour la menagere
Route::middleware(['auth:sanctum','verified', 'authmenagere'])->group(function () {
    Route::get('/menagere/dashboard', [MenagereDashboardController::class, 'index'])->name('menagere.dashboard');
});


//Pour l'admin
Route::middleware(['auth:sanctum','verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    // Route::post('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    // Route::post('/logout', [AdminDashboardController::class, 'logout'])->name('logout');
});




// Route::middleware(['auth:sanctum','verified','authadmin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    
// });



