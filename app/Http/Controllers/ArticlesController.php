<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        // render a list of a resource
        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // show a single resource
        return view('articles.show', ['article'=>$article]);
    }

    
    public function create()
    {
        // shows a view to create a new resource
        return view('articles.create');
    }

    public function store(Article $article)
    {
        // persists the new resource
        $article->create($this->validateArticle());
        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        // persists the new resource
        $article->update($this->validateArticle());
        return redirect('/articles/' . $article->id);
    }

    public function destroy($id)
    {
        $article= Article::find($id);
    }
        
    public function validateArticle()
    {
       
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
