<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LearnController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/index', function () {
        return view('index');
    })->name('index');
});

Route::middleware('auth')->get('/learn/learning', [LearnController::class, 'learning'])->name('learn.learning');

Route::resource('learn', LearnController::class);


