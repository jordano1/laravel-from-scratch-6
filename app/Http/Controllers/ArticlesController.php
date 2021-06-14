<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        // render a list of a resource
        if(request('tag'))
        {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
            
        }else{
            $articles = Article::latest()->get();
        }

        
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // show a single resource
        return view('articles.show', ['article'=>$article]);
    }

    
    public function create()
    {
        return view('articles.create', [
            'tags'=>Tag::all()
        ]);
    }

    public function store(Article $article)
    {
        dd(request()->all());
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
        return redirect($article->path());
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
