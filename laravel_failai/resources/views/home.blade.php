@extends('layouts.admin.main')

@section('title', 'Home')

@section('content')
    <h1>Welcome</h1>
    <h4>{{auth()?->user()?->name}}</h4>
@endsection
