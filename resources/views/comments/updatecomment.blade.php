@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
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
                    </div>
                        <h2 class="text-center">Update Comment</h2>

                            <p>Title: {{ $comment->CommentTitle }}</p>
                            <p>Body: {{ $comment->CommentBody }}</p>
                        
                        <form action={{route('posts.comment.update',['post' => $post->id,'comment'=> $comment->comment_id])}} method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <label for="comment[CommentTitle]"> Title</label>
                            <input class ='form-control' type="text" id="comment[CommentTitle]" name="comment[CommentTitle]" value ={{old('comment.Commenttitle', $comment->CommentTitle ) }} >
                            <br>
                            <label for="comment[commentbody]">Body</label>
                            <textarea type="text" class="form-control" id="comment[CommentBody]" name="comment[CommentBody]">{{old('comment.CommentBody', $comment->CommentBody )}}</textarea>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit Update</button>   
                            
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

<a href={{route('posts.show', ['post' => $post->id])}}>Back to post </a> 