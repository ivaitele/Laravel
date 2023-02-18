@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <h1>Editing </h1>
    <span>Redagavimo forma</span>
    <form action="{{route('statuses.update', $status->id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{$status->name}}"><br>
        <input type="text" name="type" placeholder="Type" value="{{$status->type}}"><br>
        <input type="submit" class="waves-effect waves-light btn" value="Atnaujinti">
    </form>
@endsection
