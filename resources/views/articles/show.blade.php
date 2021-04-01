@extends('layout')

@section('content')
<div id="wrapper">
<div id="page" class="container">
<div id="content">
	<div class="title">
		
		<span class="byline">{{$article->title}}</span> </div>
		<p>{{$article->body}}</p>
	<p><img src="/css/images/banner.jpg" alt="" class="image image-full" /> </p>
	<p>{{$article->excerpt}}</p>
</div>

@endsection