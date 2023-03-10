@extends('layouts.admin.main')

@section('title', 'Editing person')

@section('content')
    <h1>Edit person</h1>
    <span>Editing {{$person->name}}</span>
    <form action="{{route('persons.update', $person)}}" method="post">
        @method('PUT')
        @include('persons.form_fields', $person)
        @csrf
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
