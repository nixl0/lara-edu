<?php

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

Route::get('/', function () {
    return view('main', [
        'articles' => Article::all()
    ]);
});

// https://laravel.com/docs/9.x/routing#route-model-binding
Route::get('/article/{article}', function (Article $article) {
    return view('article', [
        'article' => $article
    ]);
});
