<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'auth'], function() {
    // Registrasi pengguna
    Route::post('register', [ApiController::class, 'register']);
    
    // Login pengguna
    Route::post('login', [ApiController::class, 'login']);
});

Route::middleware('auth:sanctum')->group(function() {
    // CRUD task (hanya bisa diakses oleh pengguna yang sudah login)
    Route::get('tasks', [ApiController::class, 'getTasks']);  // Mendapatkan daftar tugas
    Route::post('tasks', [ApiController::class, 'createTask']);  // Membuat tugas baru
    Route::put('tasks/{id}', [ApiController::class, 'updateTask']);  // Memperbarui tugas
    Route::delete('tasks/{id}', [ApiController::class, 'deleteTask']);  // Menghapus tugas
});

