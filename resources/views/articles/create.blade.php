@extends('layout')

@section('bulma')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
@endsection
@section('content')
<div class="content">
    <div id="wrapper">
        <div id="page" class="container">
        <h1>New Article</h1>
            <form method="POST" action='/articles'>
                @csrf
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input type="text" class="input" name="title" >
                        @if ($errors->has('title'))
                        <input type="text" class="input is-danger" name="title" >
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt" cols="30" rows="10" ></textarea>
                    </div>
                </div>
                <div class="field">
                    <label for="body" class="label">body</label>
                    <div class="control">
                        <textarea class="textarea" name="body" id="body" cols="30" rows="10" ></textarea>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection