@extends('layout')

@section('content')
<div class="content" style="text-align:center;">
    <div id="wrapper">
        <div id="page" class="container">
        <h1>New Article</h1>
            <form action="" method="post">
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input type="text" class="input">
                    </div>
                </div>
                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <textarea name="excerpt" id="excerpt" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="field">
                    <label for="body" class="label">body</label>
                    <div class="control">
                        <textarea name="body" id="body" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection