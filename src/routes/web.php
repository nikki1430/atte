<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

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


// ログイン
Route::get('/', [AttendanceController::class, 'punch'])->middleware('auth');

// 打刻処理
Route::post('/work', [AttendanceController::class, 'work'])
    ->name('work');
