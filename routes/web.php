<?php

use App\Http\Controllers\ShortLinkController;
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


Route::get('generate-shorten-link', [ShortLinkController::class, 'index']);
Route::post('generate-shorten-link', [ShortLinkController::class, 'store'])->name('shorten.link.post');

Route::get('{code}', [ShortLinkController::class, 'shortenLink'])->name('shorten.link');
