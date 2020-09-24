@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <p>Title: {{ $post->title }}</p>
                    <p>Body: {{ $post->body }}</p>

                    <h2 class="text-center">Add a comment</h2>
                    <form action="{{route('posts.comment.store', ['post' => $post->id])}}" method="POST">
                        @csrf
                        <label for="comment[CommentTitle]"> Title</label>
                        <input class ='form-control' type="text" id="comment[CommentTitle]" name="comment[CommentTitle]" value ='{{old('comment.title')}}' >
                        <br>
                        <label for="comment[CommentBody]">Body</label>
                        <textarea type="text" class="form-control" id="comment[CommentBody]" name="comment[CommentBody]">{{old('comment.CommentBody')}}</textarea>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>                       
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

<a href={{route('posts.show', ['post' => $post->id])}}>Back to post </a> 