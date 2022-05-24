@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 my-3">
                <h2>{{ $post->title  }}</h2>
                <a href="/dashboard/posts" class="btn btn-success btn-sm"> <span data-feather="arrow-left"></span> Back To All My
                    Posts</a>
                <a href="" class="btn btn-warning btn-sm"><span data-feather="edit"></span>Edit</a>
                <a href="" class="btn btn-danger btn-sm"> <span data-feather="x-circle"></span>Delete</a>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    class="img-fluid rounded mt-2" alt="{{ $post->category->name }}">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
