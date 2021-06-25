<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sharks/create', [App\Http\Controllers\sharkController::class, 'create']);
Route::post('/sharks/create', [App\Http\Controllers\sharkController::class, 'store']);

// Update shark
// Nhớ là phải truyền thêm id để biết được đối tượng muốn sửa nhé
Route::get('/sharks/update/{id}', [App\Http\Controllers\sharkController::class, 'edit']);
Route::post('/sharks/update/{id}', [App\Http\Controllers\sharkController::class, 'update']);

Route::get('/sharks/delete/{id}', [App\Http\Controllers\sharkController::class, 'delete']);

Route::get('/sharks', [App\Http\Controllers\sharkController::class, 'index']);