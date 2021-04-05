@extends('layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
        @foreach($articles as $article)
		<div id="content" style="padding-bottom:30px; text-align:center; margin:0 auto;">
            <div class="title">
                <h1 style="font-size:50px;">
                    <a href="/articles/{{$article->id}}">
                        {{$article->title}}
                        {{$article->id}}
                    </a>
                </h1>
            </div>
            <p>
                <img src="/css/images/banner.jpg" alt="" class="image image-full">
            </p>
            <p>{{$article->excerpt}}</p>
        </div>
        <hr style="clear:both;">
        @endforeach
    </div>
</div>
@endsection