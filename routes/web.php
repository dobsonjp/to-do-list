<?php

use App\Http\Controllers\CompleteTaskController;
use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\DeleteTaskController;
use App\Http\Controllers\TasksController;
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

Route::get('/', TasksController::class);

Route::post('/create', CreateTaskController::class)->name('create.task');
Route::post('/delete/{task}', DeleteTaskController::class)->name('delete.task');
Route::post('/complete/{task}', CompleteTaskController::class)->name('complete.task');
