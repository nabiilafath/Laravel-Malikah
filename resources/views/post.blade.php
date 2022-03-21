@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <p>By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">

                <img src="{{ asset('storage/' . $post->image) }}" alt="$post->category->name" width="1200" height="300" class="img-fluid">
            </div>
            @else
            <img src="https://images.unsplash.com/5/unsplash-kitsune-4.jpg?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9&s=dd060fe209b4a56733a1dcc9b5aea53a" alt="$post->category->name" width="1200" height="300" class="img-fluid">
            @endif
            <article class="my-3 fs-5">{!! $post->body !!}</article>

            <a href="/posts" class="d-block mt-3">back to posts</a>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection