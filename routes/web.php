<?php

// use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//Students
// View
Route::get('/', [StudentsController::class, 'myWelcomeView'])->name(name: 'std.myWelcomeView');
// Create
Route::post('/create', [StudentsController::class, 'createNewStd'])->name(name: 'std.createNew');
//Update
Route::put('/students/{student}', [StudentsController::class, 'update'])->name(name: 'std.update');
//Delete
Route::delete('/students/{student}', [StudentsController::class, 'delete'])->name(name: 'std.delete');

//Login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login');
