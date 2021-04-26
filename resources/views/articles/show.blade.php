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
			<p>
				@foreach ($article->Tags as $tag)
					<a href="#">{{$tag->name}}</a>		
				@endforeach
			</p>
		</div>
	</div>
</div>
@endsection