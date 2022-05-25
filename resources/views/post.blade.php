@extends('layouts.main')


@section('container')

    <div class="container">
        <div class="row justify-content-center">
             <div class="col-md-8">
                <h2>{{ $post->title  }}</h2>
                <p>By <a href="/posts?author={{ $post->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }} </a></p>
                @if ($post->image)
                <div style="max-height: 400px; overflow:hidden;">
                    <img src="{{ asset('storage/'. $post->image) }}"  class="img-fluid rounded" alt="{{ $post->category->name }}">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid rounded" alt="{{ $post->category->name }}">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body  !!}
                </article>
                <a href="/posts" class="d-block mt-5 mb-4 text-decoration-none">Back to Post</a>
             </div>
        </div>    
    </div>

@endsection


