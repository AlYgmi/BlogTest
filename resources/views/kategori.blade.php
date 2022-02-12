
@extends('layouts.main')

@section('container')
    <h1 class="mb-4">Post Category : {{ $category }}</h1>

@foreach($posts as $post)
<article class="mb-5 border-bottom pb-3">
<h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
<p>{{ $post->excerpt }}</p>
</article>
@endforeach

@endsection