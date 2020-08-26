@extends('layouts.app')

@section('title', 'Post List')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<p>
    <p>
@foreach ($posts as $post)
    <p>Title {{ $post->title }}</p>
    <p>Body {{ $post->body }}</p>
    <a href='/posts/{{$post->id}}'>{{ $post->title}} linky</a> 
@endforeach</p>

    </p>
@endsection