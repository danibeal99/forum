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
    <a href={{route('posts.edit',['post' => $post->id])}}> Update post</a> 
    <form action="{{route('posts.destroy',['post' => $post->id])}}" method="POST">  
        @method('DELETE')
        @csrf                 
        <button type="submit" class="btn btn-primary">Delete</button>                       
    </form>
    <br>

    <h4>Display Comments</h4>
                    @foreach($post->comment as $comment)
                        <div class="display-comment">
                            <strong>{{ $comment->CommentTitle}}</strong>
                            <p>{{ $comment->CommentBody }}</p>
                            <a href={{route('posts.comment.show', ['post' => $post->id, 'comment' => $comment->comment_id])}}> See and edit Comment</a> 
                        </div>
                        <br>
                    @endforeach   
    <h3> <b> <a href={{route('posts.comment.create',['post' => $post->id])}}>Add a comment</a>  <br> 

@endsection

<a href={{route('posts.index')}}>Back to posts </a> 

