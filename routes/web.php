<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ProjectController::class, 'index'])->name('index');
Route::get('/create', [ProjectController::class, 'create'])->name('create');
Route::post('/saveProject', [ProjectController::class, 'saveProject']);
Route::get('/viewProjectData/{id}', [ProjectController::class, 'viewProjectData']);
Route::get('/editProject/{id}', [ProjectController::class, 'editProject']);
Route::post('/updateProject', [ProjectController::class, 'updateProject']);
Route::get('/deleteProject/{id}', [ProjectController::class, 'deleteProject']);
