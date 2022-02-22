@extends('layouts.main')
@section('container')

<h1 class="mb-5">Post Categories</h1>

@foreach($categories as $category)
<article class="mb-2">
   <ul>
       <li>
           <h2>
               <a href="/categories/{{ $category->slug }}" style="text-decoration: none;"> {{ $category->name  }} </a>
           </h2>
    
       </li>
   </ul>

</article>
@endforeach


@endsection