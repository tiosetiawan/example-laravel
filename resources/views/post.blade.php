@extends('layouts.main')


@section('container')
@section('title')
<h6>{{ $title }}</h6>
@endsection

<article>
    <h2>{{ $post->title  }}</h2>
    <p>By <a href="" class="text-decoration-none"> {{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a></p>
    {!! $post->body  !!}
    <a href="/posts" class="d-block mt-5">Back to Post</a>
</article>

@endsection


