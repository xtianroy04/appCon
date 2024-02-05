<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Student;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

// Authentication

// Route nga ma access only sa wala naka login
Route::middleware(['guest'])->group(function () {
    Route::get('/', [UserController::class, 'welcome'])->name('welcome');
    Route::get('login/', [UserController::class, 'login'])->name('login');
    Route::post('loginProcess/', [UserController::class, 'loginProcess'])->name('loginProcess');
    Route::get('register/', [UserController::class, 'register'])->name('register');
    Route::post('store/', [UserController::class, 'store'])->name('store');
});

// Route nga ma access only sa naka login
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [StudentController::class, 'index'])->name('home');
    Route::get('students/addForm/', [StudentController::class, 'addForm'])->name('addForm');
    Route::post('/students/store', [StudentController::class, 'processAdd'])->name('processAdd');
    Route::delete('/students/{id}', [StudentController::class, 'delete'])->name('delete');
    Route::get('/students/{id}/updateForm', [StudentController::class, 'updateForm'])->name('updateForm');
    Route::put('/updateStudent/{id}', [StudentController::class, 'updateStudent'])->name('updateStudent');
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});





Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

