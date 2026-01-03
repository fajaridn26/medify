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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/master-items', [App\Http\Controllers\MasterItemsController::class, 'index']);
Route::get('/master-items/search', [App\Http\Controllers\MasterItemsController::class, 'search']);
Route::get('/master-items/form/{method}/{id?}', [App\Http\Controllers\MasterItemsController::class, 'formView']);
Route::post('/master-items/form/{method}/{id?}', [App\Http\Controllers\MasterItemsController::class, 'formSubmit']);

Route::get('/master-items/view/{kode}', [App\Http\Controllers\MasterItemsController::class, 'singleView']);
Route::get('/master-items/delete/{id}', [App\Http\Controllers\MasterItemsController::class, 'delete']);


Route::get('/master-items/update-random-data', [App\Http\Controllers\MasterItemsController::class, 'updateRandomData']);
Route::get('/master-items/export-excel', [App\Http\Controllers\MasterItemsController::class, 'exportExcel']);

Route::get('/kategori-items', [App\Http\Controllers\KategoriItemsController::class, 'index']);
Route::get('/kategori-items/search', [App\Http\Controllers\KategoriItemsController::class, 'search']);
Route::get('/kategori-items/form/{method}/{id?}', [App\Http\Controllers\KategoriItemsController::class, 'formView']);
Route::post('/kategori-items/form/{method}/{id?}', [App\Http\Controllers\KategoriItemsController::class, 'formSubmit']);

Route::get('/kategori-items/view/{kode}', [App\Http\Controllers\KategoriItemsController::class, 'singleView']);
Route::get('/kategori-items/delete/{id}', [App\Http\Controllers\KategoriItemsController::class, 'delete']);

Route::get('/kategori-items/export/pdf/{kode}', [App\Http\Controllers\KategoriItemsController::class, 'exportPdf'])->name('kategori-items.export.pdf');




