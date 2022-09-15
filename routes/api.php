<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/employees', [EmployeesController::class, 'index']);
Route::post('/employees/add', [EmployeesController::class, 'store']);
Route::delete('/employees/delete/{id}', [EmployeesController::class, 'delete']);
Route::get('/employees/update/{id}', [EmployeesController::class, 'update']);
Route::get('/employees/view/{id}', [EmployeesController::class, 'view']);
