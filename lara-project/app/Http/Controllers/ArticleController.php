<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        // dd(request('tag'));
        return view('articles.index', [
            'articles' => Article::latest()->filter(request(['tag', 'search']))->paginate(10)
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

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|unique:articles,title|max:255',
            'slug' => 'required|max:255',
            'tags' => 'required',
            'content' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        Article::create($validated);

        return redirect('/');
    }

    public function edit(Article $article) {
        return view('articles.edit', [
            'article' => $article
        ]);
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|unique:articles,title|max:255',
            'slug' => 'required|max:255',
            'tags' => 'required',
            'content' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        $article->update($validated);

        return back();
    }

    public function destroy(Article $article) {
        $article->delete();
        return redirect('/');
    }
}
