<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/delete",[StudentController::class,"delete"]);
Route::post("/upate",[StudentController::class,"update"]);
Route::post("/search",[StudentController::class,"search"]);
