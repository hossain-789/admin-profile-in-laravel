<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', [AuthController::class, 'show']);
Route::get('admin/data', [AuthController::class, 'store']);
Route::get('table', [AuthController::class, 'tableData']);
Route::get('print', [AuthController::class, 'printData']);
Route::get('delete/{id}', [AuthController::class, 'delete'])->name('delete');
