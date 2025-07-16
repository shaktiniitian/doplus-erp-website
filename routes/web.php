<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\OrganizationController;
use App\Models\Organization;
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

Route::get('/', [DefaultController::class, 'home'])->name('home');

Route::get('doplusjaurney', [DefaultController::class, 'doplusjaurney'])->name('doplusjaurney');

Route::get('ourobjective', [DefaultController::class, 'ourobjective'])->name('ourobjective');

Route::get('dtpleducationerp', [DefaultController::class, 'dtpleducationerp'])->name('dtpleducationerp');

Route::get('webdesign', [DefaultController::class, 'webdesign'])->name('webdesign');
Route::get('development', [DefaultController::class, 'development'])->name('development');
Route::get('mobileapplication', [DefaultController::class, 'mobileapplication'])->name('mobileapplication');
Route::get('erpdevelopment', [DefaultController::class, 'erpdevelopment'])->name('erpdevelopment');
Route::get('contact', [DefaultController::class, 'contact'])->name('contact');
Route::get('login', [DefaultController::class, 'showLoginForm'])->name('login');
Route::post('login', [DefaultController::class, 'login']);
Route::get('signup', [DefaultController::class, 'signup'])->name('signup');
Route::post('register', [DefaultController::class, 'register']);
Route::middleware(['auth:web'])->group(function () {
    Route::get('organizations', [OrganizationController::class, 'index'])->name('organizations');
    Route::get('organization', [OrganizationController::class, 'organization'])->name('organization');
    Route::post('organization', [OrganizationController::class, 'store'])->name('store-organization');
    Route::get('profile', [DefaultController::class, 'profile'])->name('profile');
});

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login'); // Or wherever you want to redirect after logout
})->name('logout');


Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AdminController::class, 'login'])->name('admin-login');
    Route::post('do-login', [AdminController::class, 'doLogin'])->name('do-login');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

});








