@extends('layouts.app')

@section('title', 'Post List')

@section('sidebar')

    @parent

    <p>This is appended to the master sidebar.</p>
@endsection


@section('content')

<div>
    @if ($errors->any())
         <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    
</div>


<h2 class="text-center">All posts</h2> 
<div class="container">
<h3> <b> <a href={{route('posts.create')}}>Create a post </a> </b></h3>
<p>
    <p>
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
    </p>
@endsection

