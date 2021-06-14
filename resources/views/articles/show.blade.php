@extends('layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2 class="byline">{{$article->title}}</h2> 
			</div>
			<p>{{$article->body}}</p>
			<p><img src="/css/images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>{{$article->excerpt}}</p>
			{!! $article->body !!}
			<p style="margin-top:10px;">
				@foreach ($article->tags as $tag)
					<a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{$tag->name}}</a>
				@endforeach
			</p>
		</div>
	</div>
</div>
@endsection