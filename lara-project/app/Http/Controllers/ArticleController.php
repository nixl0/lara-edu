<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        // dd(request('tag'));
        return view('articles.index', [
            'articles' => Article::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show(Article $article) {
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create() {
        return view('articles.create');
    }

    public function store() {
        $validated = request()->validate([
            'title' => 'required|unique:articles,title|max:255',
            'slug' => 'required|max:255',
            'tags' => 'required',
            'content' => 'required'
        ]);

        Article::create($validated);

        return redirect('/');
    }
}
