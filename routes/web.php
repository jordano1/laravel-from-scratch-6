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
    return view('welcome');
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
Route::get('/posts/{post}', 'PostsController@show ');
Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');

