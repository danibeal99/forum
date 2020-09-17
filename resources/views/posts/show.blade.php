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
    <h4>Display Comments</h4>
                    @foreach($post->comment as $comment)
                        <div class="display-comment">
                            <strong>{{ $comment->CommentTitle}}</strong>
                            <p>{{ $comment->CommentBody }}</p>
                        </div>
                    @endforeach 
        {{-- <a href='{{route('posts.show')}}$post->id}}'>{{ $post->title}} linky</a>  --}}
    {{-- @endforeach</p>     

                    <form action="{{route('posts.destroy',['post' => $post->id])}}" method="POST">  
                        @method('DELETE')
                        @csrf                 
                        <button type="submit" class="btn btn-primary">Delete</button>                       
                    </form>
                    {{-- <a href={{route('posts.edit', ['post' => $post->id])}}> Update post</a>  --}}
                    <a href={{route('posts.edit',['post' => $post->id])}}> Update post</a> 
    </p>

    <h3> <b> <a href={{route('posts.comment.create',['post' => $post->id])}}>Add a comment</a>  <br> 

    {{-- <form action="{{route('comment.store')}}" method="POST">
        @csrf
        <label for="comment[CommentTitle]"> Title</label>
        <input class ='form-control' type="text" id="comment[CommentTitle]" name="comment[CommentTitle]" value ='{{old('comment.title')}}' >
        <br>
        <label for="comment[body]">Body</label>
        <textarea type="text" class="form-control" id="comment[CommentBody]" name="comment[CommentBody]">{{old('comment.CommentBody')}}</textarea>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>                       
    </form> --}}

@endsection

<a href={{route('posts.index')}}>Back to posts </a> 

