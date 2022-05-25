@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 my-3">
                <h2>{{ $post->title  }}</h2>
                <a href="/dashboard/posts" class="btn btn-success btn-sm"> <span data-feather="arrow-left"></span> Back To All My
                    Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><span data-feather="x-circle"></span>Delete</button>
                </form>
                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/'. $post->image) }}"  class="img-fluid rounded mt-2" alt="{{ $post->category->name }}">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid rounded mt-2" alt="{{ $post->category->name }}">
                @endif
              

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
