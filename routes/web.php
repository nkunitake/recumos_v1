<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LearnController;
use App\Http\Controllers\WakeupController;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\GoalController;

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
Route::middleware('auth')->get('/learn/past', [LearnController::class, 'past'])->name('learn.past');

Route::resource('learn', LearnController::class);

Route::get('/wakeup/end', function () {
    return view('wakeup.end');
});

Route::resource('wakeup', WakeupController::class);


Route::get('/statement/end', function () {
    return view('statement.end');
});

Route::resource('statement', StatementController::class);



Route::get('/goal/end', function () {
    return view('goal.end');
});

Route::resource('goal', GoalController::class);



