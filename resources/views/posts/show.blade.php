@extends('layouts.app')

@section('title', 'Post List')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

</div>

<p>
    <p>
    <p>Title: {{ $post->title }}</p>
    <p>Body: {{ $post->body }}</p>
                    <form action="{{route('posts.destroy',['post' => $post->id])}}" method="POST">  
                        @method('DELETE')
                        @csrf                 
                        <button type="submit" class="btn btn-primary">Delete</button>                       
                    </form>
                    {{-- <a href={{route('posts.edit', ['post' => $post->id])}}> Update post</a>  --}}
                    <a href={{route('posts.edit',['post' => $post->id])}}> Update post</a> 
    </p>

@endsection

<a href={{route('posts.index')}}>Back to posts </a> 

