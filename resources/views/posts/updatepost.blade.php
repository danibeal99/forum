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
                        <h2 class="text-center">Update Post</h2>

                            <p>Title: {{ $post->title }}</p>
                            <p>Body: {{ $post->body }}</p>
                        
                        <form action={{route('posts.update',['post' => $post->id])}} method="PUT">
                            @csrf
                            <label for="post[title]"> Title</label>
                            <input class ='form-control' type="text" id="post[title]" name="post[title]" value ={{old('post.title', $post->title ) }} >
                            <br>
                            <label for="post[body]">Body</label>
                            <textarea type="text" class="form-control" id="post[body]" name="post[body]">{{old('post.body', $post->body )}}</textarea>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit Update</button>   
                            
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

<a href={{route('posts.index')}}>Back to posts </a> 