<?php

use App\Http\Controllers\CustomControllerWithAllBlade;
use App\Http\Controllers\CustomControllerWithAntlers;
use App\Http\Controllers\CustomControllerWithBlade;
use Illuminate\Support\Facades\Route;
use Statamic\StaticCaching\Middleware\Cache;

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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::prefix('customviews')->middleware(Cache::class)->group(function() {
    Route::get('antlers', CustomControllerWithAntlers::class)->name('poc.cache.antlers');
    Route::get('blade', CustomControllerWithBlade::class)->name('poc.cache.blade');
    Route::get('allblade', CustomControllerWithAllBlade::class)->name('poc.cache.allblade');
});

Route::prefix('notprefixed')->middleware(Cache::class)->group(function() {
    Route::get('antlers', CustomControllerWithAntlers::class)->name('poc.noprefix.antlers');
    Route::get('blade', CustomControllerWithBlade::class)->name('poc.noprefix.blade');
    Route::get('allblade', CustomControllerWithAllBlade::class)->name('poc.noprefix.allblade');
});

Route::prefix('cachelessviews')->group(function() {
    Route::get('antlers', CustomControllerWithAntlers::class)->name('poc.nomiddleware.antlers');
    Route::get('blade', CustomControllerWithBlade::class)->name('poc.nomiddleware.blade');
});