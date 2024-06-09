<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get("/", [StudentController::class, 'index']);
Route::post("/post", [StudentController::class, 'post']);
Route::get("/delete/{id}", [StudentController::class, 'delete']);
