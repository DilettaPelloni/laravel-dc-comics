<?php

use App\Http\Controllers\Admin\ComicController;
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
    return redirect()->route('comics.index');
});

Route::get('/comics/{id}/confirm', [ComicController::class, 'confirm'])->name('comics.confirm');

Route::resource('comics', ComicController::class);
