<?php

use App\Http\Controllers\ArticleController;
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
Route::get('/articles/create', [ArticleController::class, 'create']);

// Store article
Route::post('/articles', [ArticleController::class, 'store']);

// Edit article
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit']);

// Update article
Route::put('/articles/{article}', [ArticleController::class, 'update']);

// Delete article
Route::delete('/articles/{article}', [ArticleController::class, 'destroy']);

// One article
Route::get('/articles/{article}', [ArticleController::class, 'show']);
