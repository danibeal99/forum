@extends('layouts.app')

@section('title', 'Post List')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')



<p>
    <p>
        <div>
    <p>Title: {{ $comment->CommentTitle }}</p>
    <p>Body: {{ $comment->CommentBody }}</p>
    <a href={{route('posts.comment.edit',['post' => $post->id, 'comment' => $comment->comment_id])}}> Update comment</a> 
    <form action="{{route('posts.comment.destroy',['post' => $post->id, 'comment' => $comment->comment_id])}}" method="POST">  
        @method('DELETE')
        @csrf                 
        <button type="submit" class="btn btn-primary">Delete</button>                       
    </form>
    <br>
</div>

@endsection
<a href={{route('posts.show', ['post' => $post->id])}}>Back to post </a> 