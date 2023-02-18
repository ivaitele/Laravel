@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <h1>Creating category</h1>
    <span>Creating</span>
    <form action="{{route('categories.store')}}" method="post">
        @include('categories.form_fields', ['category' => null, 'argumentai' => ''])
        @csrf
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Create">
    </form>
@endsection
