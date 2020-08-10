

@extends('layouts.app')

@section('Users', 'User List')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<p>
    <p>
@foreach ($users as $user)
    <p>This is user {{ $user->id }} Name: {{ $user->name }}</p>
@endforeach</p>

    </p>
@endsection
