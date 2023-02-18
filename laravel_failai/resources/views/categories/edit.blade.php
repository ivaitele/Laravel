@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <h1>Edit category</h1>
    <span>Editing {{$category->name}}</span>
    <form action="{{route('categories.update', $category)}}" method="post">
        @method('PUT')
        @include('categories.form_fields', $category)
        @csrf
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
