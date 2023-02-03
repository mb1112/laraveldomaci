<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IspitController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\API\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('students', StudentController::class);
 Route::get('/students', [StudentController::class, 'getAllStudents']);

 Route::post('/students', [StudentController::class, 'addStudent']);


 Route::delete('/students/{student}', [StudentController::class, 'deleteStudent']);

 Route::post('/register', [AuthController::class, 'register']);
 Route::post('/login', [AuthController::class, 'login']);

 Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

     Route::resource('ispits', IspitController::class);
     Route::get('/ispits', [IspitController::class, 'getAllIspits']);
     Route::post('/ispits', [IspitController::class, 'addIspit']);
     Route::delete('/ispits/{ispit}', [IspitController::class, 'deleteIspit']);
     Route::post('/logout', [AuthController::class, 'logout']);
 });
 Route::resource('ispits', IspitController::class)->only(['getAllIspits']);
