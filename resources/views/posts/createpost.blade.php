@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div>
                        @if(!empty($errors->first()))
                            <div class="row col-lg-12">
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first() }}</span>
                                </div>
                            </div>
                        @endif
                    </div>
                    <h2 class="text-center">Create a Post</h2>
                    <form action="{{route('posts.store')}}" method="POST">
                        @csrf
                        <label for="post[title]">Title</label>
                        <input class ='form-control' type="text" id="post[title]" name="post[title]" value ='{{old('post.title')}}' >
                        <br>
                        <label for="post[body]">Body</label>
                        <textarea type="text" class="form-control" id="post[body]" name="post[body]">{{old('post.body')}}</textarea>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>                       
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection