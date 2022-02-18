@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-9" style="padding: 60px 0px">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All My Post's</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit My Post's</a>
            <a href="" class="btn btn-danger"><span data-feather="trash"></span> Delete</a>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->nama }}" alt="{{ $post->category->nama }}" class="img-fluid mt-3">
            <article class="my-3 fs-5">
                {!! $post->body !!} 
            </article>
            
            <a href="/posts" class="text-decoration-none">kembali ke post</a>
        </div>
    </div>
</div>
@endsection