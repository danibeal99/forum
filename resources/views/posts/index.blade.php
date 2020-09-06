@extends('layouts.app')

@section('title', 'Post List')

@section('sidebar')

<h3> <b> <a href={{route('posts.create')}}>Create a post </a>  <br>                
<a href={{route('myposts')}}>Go to my posts</a> </p></b></h3>

@endsection

@yield('sidebar')


@section('content')


@include('posts.viewingpostdata', ['title' => 'All Posts'])

@endsection

