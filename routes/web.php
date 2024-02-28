<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
//     $site = ['title' => 'cona'];
//     return view('page.login', [LoginController::class, 'loginPage']);
// });
Route::get('/', [LoginController::class, 'loginPage'])->name('home');
Route::post('/auth-login', [LoginController::class, 'loginAction'])->name('login');
Route::get('/home', [HomeController::class, 'homePage']);
Route::resource('/home/branch', BranchController::class);
Route::get('/latihan', function () {
    return view('page.latihan.dashboard');
});
