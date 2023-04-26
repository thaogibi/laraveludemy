@extends('layout')

@section('title', 'Create new post')

@section('content')
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <h1>Creat a new Post</h1>
        @include('posts._form')

        <button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>
@endsection