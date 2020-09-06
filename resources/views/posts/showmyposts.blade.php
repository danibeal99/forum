@extends('layouts.app')

@section('title', 'Post List')


@section('sidebar')

<a href={{route('posts.index')}}>Back to posts </a> 

@endsection

@yield ('sidebar')


@section('content')


@include('posts.viewingpostdata', ['title' => 'My Posts'])


@endsection

