<?php

use App\Http\Controllers\AspirasiController;
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

// Route::get('/', function () {
//     return view('admin');
// });

Route::get('/', [AspirasiController::class, 'index']);
Route::get('/admin', [AspirasiController::class, 'admin']);

Route::post('/aspirasi/add', [AspirasiController::class, 'add']);

Route::get('/aspirasi/update/{id}', [AspirasiController::class, 'update']);
Route::get('/aspirasi/delete/{id}', [AspirasiController::class, 'delete']);
