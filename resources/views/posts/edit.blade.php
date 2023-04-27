@extends('layout')

@section('title', 'Update post {{ $post->title }}')

@section('content')
  <h1>Update the post</h1>
  <form method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}">
      @csrf
      @method('PUT')
      @include('posts._form')

      <button type="submit" class="btn btn-primary btn-block">Update</button>
  </form>
@endsection