@extends('layouts.base')
@section('title')
    
@endsection

@section('main')
    <section class="container mx-auto flex justify-center">
        <p>ID: {{$user->id}}</p>
        <p>Name: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        <p>Password: {{$user->password}}</p>
        <p>Created at: {{$user->created_at}}</p>
        <p>Updated at: {{$user->updated_at}}</p>
    </section>
@endsection