<?php

use App\Http\Controllers\DefaultController;
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

Route::get('/', [DefaultController::class,'home'])->name('home');

Route::get('doplusjaurney', [DefaultController::class,'doplusjaurney'])->name('doplusjaurney');

Route::get('ourobjective', [DefaultController::class,'ourobjective'])->name('ourobjective');

Route::get('dtpleducationerp', [DefaultController::class,'dtpleducationerp'])->name('dtpleducationerp');

Route::get('webdesign', [DefaultController::class,'webdesign'])->name('webdesign');
Route::get('development', [DefaultController::class,'development'])->name('development');
Route::get('mobileapplication', [DefaultController::class,'mobileapplication'])->name('mobileapplication');
Route::get('erpdevelopment', [DefaultController::class,'erpdevelopment'])->name('erpdevelopment');
Route::get('contact', [DefaultController::class,'contact'])->name('contact');
Route::get('login', [DefaultController::class,'login'])->name('login');






