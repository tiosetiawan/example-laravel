
@extends('layouts.main')


@section('container')
    @section('title')
        <h6>{{ $title }}</h6>
    @endsection
    <h1 class="mb-5"> Post Categories</h1>
    @foreach ($categories as $category)
      <ul>
          <li>
            <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
          </li>
      </ul>
    
    @endforeach
@endsection

