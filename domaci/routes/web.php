<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IspitController;
use App\Http\Controllers\StudentController;
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

// Route::get('/students', [StudentController::class, 'getAllStudents']);

// Route::post('/students', [StudentController::class, 'addStudent']);


// Route::delete('/students/{student}', [StudentController::class, 'deleteStudent']);

// Route::get('/ispits', [IspitController::class, 'getAllIspits']);

// Route::post('/ispits', [IspitController::class, 'addIspit']);