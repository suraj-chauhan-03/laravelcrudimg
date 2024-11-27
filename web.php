<?php

use App\Http\Controllers\empcontroller;
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

Route::get('/', function () {
    return view('register');
});

// Route::get('/register', function () {
//     return view('register');
// });

Route::get("/register",[empcontroller::class,'openregister']);

Route::post("/store",[empcontroller::class,'store']);

Route::get("/display",[empcontroller::class,'display'])->name("display");

Route::get("/delete/{id}",[empcontroller::class,'delete']);

Route::get("/update/{id}",[empcontroller::class,'update']);

Route::post("/storeupdate",[empcontroller::class,'storeupdate']);


//second crud
Route::get("/stdregister",[empcontroller::class,'stdregister']);

Route::post("/stdstore",[empcontroller::class,'stdstore']);

Route::get("/stddisplay",[empcontroller::class,'stddisplay'])->name("stddisplay");

Route::get("/stddelete/{id}",[empcontroller::class,'stddelete']);



