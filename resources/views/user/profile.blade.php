@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Profile</h1>
        <p>Name: {{ $user->name }}</p>
        <p>Phone: {{ $user->phone }}</p>
        <p>Address: {{ $user->address }}</p>
        <p>Email: {{ $user->email }}</p>
    </div>
@endsection