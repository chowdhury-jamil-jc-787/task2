<?php

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

Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer');
Route::post('/import', [App\Http\Controllers\CustomerController::class, 'save'])->name('import');


Route::get('/filter', [App\Http\Controllers\FilterController::class, 'indexFiltering'])->name('filter');

Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::get('/view', [App\Http\Controllers\SearchController::class, 'view'])->name('view');
Route::post('/store', [App\Http\Controllers\SearchController::class, 'save'])->name('store');