@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">{{ $post->title }}</h1>
            <p>By. <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            
            <img src="https://source.unsplash.com/1200x700?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            
            <article class="my-3">
                <p>{!! $post->body !!} </p>
            </article>

            <a href="/posts" class="text-decoration-none pb-5">Back to Posts</a>
        </div>
    </div>
</div>
    
@endsection