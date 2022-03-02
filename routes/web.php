<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AlengoController;
use App\Http\Controllers\HomesliderController;
use App\Http\Controllers\SouthfoodsController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\ContactusController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/category/{id}', [AlengoController::class, 'show'])->name('categories');
Route::get('/', [HomesliderController::class, 'index'])->name('index');
Route::get('/about', [AboutusController::class, 'index'])->name('about');
Route::get('/alengo', [AlengoController::class, 'index'])->name('alengo');
Route::get('/category', [AlengoController::class, 'category'])->name('category');
Route::get('/blog', [SouthfoodsController::class, 'index'])->name('blog');
Route::get('/privacypolicy', [AlengoController::class, 'privacy'])->name('privacypolicy');
Route::get('/gallary', [GallaryController::class, 'index'])->name('gallary');
Route::get('/contactus', [ContactusController::class, 'index'])->name('contactus');
Route::post('/contactus', [ContactusController::class, 'store'])->name('contact');




