<?php

use App\Http\Controllers\AccessibilityController;
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
    return view('phone-home');
});

Route::view('/splash', 'splash')
    ->name('splash.get');

Route::view('/landing', 'landing')
    ->name('landing.get');

Route::view('/course/{name}', 'course')
    ->name('course.get');

Route::get('/settings', [AccessibilityController::class, 'showSettings'])
    ->name('settings.get');