@extends('layouts.app')

@section('title', 'Post List')

@section('sidebar')

    @parent

    <p>This is appended to the master sidebar.</p>
@endsection


@section('content')


<h2 class="text-center">{{$title}}</h2> 


<div class="container">
    <div class="card-body">
@foreach ($posts as $post)
<div class="col-4">
    <p>Title {{ $post->title }}</p>
    <p>Body {{ $post->body }}</p>
    <a href={{route('posts.show', ['post' => $post->id])}}> {{ $post->title}}linky</a> 
</div>  
    {{-- <a href='{{route('posts.show')}}$post->id}}'>{{ $post->title}} linky</a>  --}}
@endforeach</p>  
</div>
</div>
@endsection