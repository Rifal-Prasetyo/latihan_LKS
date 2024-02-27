<?php

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
