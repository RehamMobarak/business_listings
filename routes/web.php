<?php

use App\Http\Controllers\ListingsController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/**
 * App Routes
 */
Route::middleware('auth')->group(function () {
    Route::resource('listings', ListingsController::class);
    Route::get('/index', function () {
        $listings = Auth::user()->listings;
        return view('index')->with('listings', $listings);
    })->name('index');
    Route::get('listings/create', function () {
        return view('create');
    })->name('create');
});

require __DIR__ . '/auth.php';
