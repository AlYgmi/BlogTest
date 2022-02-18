@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col" style="padding: 60px 0px">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>by. <a href="/posts?authors={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?categories={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->nama }}" alt="{{ $post->category->nama }}" class="img-fluid">
                <article class="my-3 fs-5">
                    {!! $post->body !!} 
                </article>
                
                <a href="/posts" class="text-decoration-none">kembali ke post</a>
            </div>
        </div>
    </div>
@endsection