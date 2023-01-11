<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home.index');
});

Route::get('home', [HomeController::class, 'index'])->name('home.index');
Route::post('home/store', [HomeController::class, 'store'])->name('home.store');
Route::post('home/mail', [HomeController::class, 'mail'])->name('home.mail');
Route::get('home/customer', [HomeController::class, 'customer'])->name('home.customer');
Route::post('home/string', [HomeController::class, 'string'])->name('home.string');
Route::post('home/import', [HomeController::class, 'import'])->name('home.import');
