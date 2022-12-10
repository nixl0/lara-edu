<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Main page, lists all articles
Route::get('/', [ArticleController::class, 'index']);

// Create article
Route::get('/articles/create', [ArticleController::class, 'create'])->middleware('auth');

// Store article
Route::post('/articles', [ArticleController::class, 'store'])->middleware('auth');

// Edit article
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->middleware('auth');

// Update article
Route::put('/articles/{article}', [ArticleController::class, 'update'])->middleware('auth');

// Delete article
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->middleware('auth');

// One article
Route::get('/articles/{article}', [ArticleController::class, 'show']);

// User register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Store user
Route::post('/users', [UserController::class, 'store']);

// User login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// User authenticate
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// User logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');