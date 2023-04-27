@extends('layout')

@section('title', 'Create new post')

@section('content')
    <h1>Creat a new Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @include('posts._form')

        <button type="submit" class="btn btn-primary btn-block">Create!</button>
    </form>
@endsection