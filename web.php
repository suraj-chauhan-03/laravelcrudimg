<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/',[EmployeeController::class,'display']);

// Route::get('/home', function () {
//     echo "yash";
// });

Route::get('/register',[EmployeeController::class,'openRegister']);

Route::post("/store",[EmployeeController::class,'store']);

Route::get('/display',[EmployeeController::class,'display'])->name("display");

Route::post("/delete/{id}",[EmployeeController::class,'delete']);

Route::get('/editData/{id}',[EmployeeController::class,'editData']);

Route::post("/update",[EmployeeController::class,'update']);


