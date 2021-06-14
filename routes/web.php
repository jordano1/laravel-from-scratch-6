<?php

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
Route::get('/',function(){
    return view('welcome',[
        'articles' => $article=App\Article::latest()->get()
    ]);
});
Route::get('/about',function(){
    return view('about',[
        'articles' => $article=App\Article::latest()->get()
    ]);
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/clients',function(){
    return view('clients');
});
Route::get('/careers',function(){
    return view('careers');
});

Route::get('/articles', function(){
    return view('articles.index', [
        'articles' =>App\Article::latest()->get()
    ]);
});
Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('articles', 'ArticlesController@destroy');
Route::post('articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::put('/articles/{article}', 'ArticlesController@update')->name('articles.update');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');