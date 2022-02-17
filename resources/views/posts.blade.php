@extends('layouts.main')
@section('container')

@foreach($posts as $p)
<article class="mb-5">
    <h2>
        <a href="posts/{{ $p['slug'] }}" style="text-decoration: none;"> {{ $p['title']  }} </a>
    </h2>
    <h6>by. {{ $p['author'] }} </h6>
    <p>{{ $p['body'] }} </p>
</article>
@endforeach


@endsection