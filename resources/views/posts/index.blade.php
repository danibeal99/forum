@extends('layouts.app')

@section('title', 'Post List')

@section('sidebar')

@endsection

@yield('sidebar')


@section('content')


@include('posts.viewingpostdata', ['title' => 'All Posts'])

@endsection

