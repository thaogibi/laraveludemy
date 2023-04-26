@extends('layout')

@section('title', 'List posts')

@section('content')
  @if(count($posts))
    <h1>List posts</h1>
    @foreach($posts as $key => $post)
      @include('posts._post')
    @endforeach
  @else
    <p>Not found posts</p>
  @endif
@endsection
