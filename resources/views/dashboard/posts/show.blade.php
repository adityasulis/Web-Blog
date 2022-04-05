@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-4 justify-content-center">
        <div class="col-lg-8">
            <h1 class="mb-4">{{ $post->title }}</h1>
            
            <a href="/dashboard/posts" class="btn btn-success btn-sm mb-3"><span data-feather="arrow-left"></span> Back to my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm mb-3"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                  <button class="btn btn-danger btn-sm mb-3" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span> Delete</button>
                </form>
            <img src="https://source.unsplash.com/1200x700?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            
            <article class="my-3">
                <p>{!! $post->body !!} </p>
            </article>

        </div>
    </div>
</div>
@endsection