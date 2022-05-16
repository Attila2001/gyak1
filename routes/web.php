<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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
Route::middleware('auth')->group(function () {
    Route::get("new_car",[CarController::class,"create"]);
    Route::get("edit_car/{id}",[CarController::class,"edit"]);
    Route::get("delete_car/{id}",[CarController::class,"delete"]);
    Route::post("/store_car",[CarController::class,"store"]);
    Route::put("/update_car",[CarController::class,"update"]);

});
Route::get("/",[CarController::class,"index"]);
Route::get("/search",[CarController::class,"search"]);
Route::get("/logout",[CarController::class,"destroy"]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
