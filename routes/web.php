<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//All listings
Route::get('/', [ListingController::class, 'index']);

//Show create Form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store 
Route::post('/listings', [ListingController::class, 'store']);

//edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Edit submit to update
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete listing
Route::delete('listings/{listing}', [ListingController::class, 'destroy']);

//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//show register form
Route::get('/register', [UserController::class, 'create']);

//create new user
Route::post('/users', [UserController::class, 'store']);

//Logout user
Route::post('/logout', [UserController::class, 'logout']);

//show Login form
Route::get('login', [UserController::class, 'login']);

//login
Route::post('users/authenticate', [UserController::class, 'authenticate']);
