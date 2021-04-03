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

    public function show($id)
    {
        // show a single resource
        $article = Article::find($id);
        return view('articles.show', ['article'=>$article]);
    }

    
    public function create()
    {
        // shows a view to create a new resource
        return view('articles.create');
    }

    public function store()
    {
        // persists the new resource
        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required'
        ]);
        $article = new Article();
        $article->title = request('title');
        $article->body = request('body');
        $article->excerpt = request('excerpt');
        $article->save();

        return redirect('/articles');
    }

    public function edit($id)
    {
        // edit an existing resource
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id)
    {
        $article= Article::find($id);
        $article->title = request('title');
        $article->body = request('body');
        $article->excerpt = request('excerpt');
        $article->save();
        return redirect('/articles/' . $article->id);
        // persist the edited resource
    }

    public function destroy()
    {
        // delete the resource
    }
        
}
