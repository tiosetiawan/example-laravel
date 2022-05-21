
@extends('layouts.main')


@section('container')
    @section('title')
        <h6>{{ $title }}</h6>
    @endsection

    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <h5>{{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach
@endsection