<?php

use App\Http\Controllers\backend\AudioController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\backend\ScheduleController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/schedule/{time}/{id}', [HomeController::class, 'audio'])->name('schedule.audio.listen');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('backend.index');

Route::resources([
    'schedules' => ScheduleController::class,
    'audios' => AudioController::class
]);

Route::get('/sign-in', function(){
    return view('auth.index');
});

Route::get('/sign-up', function(){
    return view('auth.index2');
});

Route::get('/test', function(){
    return view('test');
});
