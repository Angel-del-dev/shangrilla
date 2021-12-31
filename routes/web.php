<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Auth;
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

// Index
Route::get("/",[HomeController::class,'index']);
// Home
Route::get("/{lang}/home",[HomeController::class,'home']);

// Only ajax requests

Route::get("/{lang}/nav",[AjaxController::class,"nav"]);
Route::get("/categories",[AjaxController::class,"getCategories"]);
Route::post("/{id}/edit",[AjaxController::class,"editStory"]);

// Stories
Route::post("/new-story",[StoryController::class,"create"]);
Route::get("/story/{id}/dashboard/{fname}",[StoryController::class,"getDashboard"]);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/logout',[SessionController::class,"logout"]);
});


Auth::routes();
