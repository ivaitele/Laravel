@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <h1>New status</h1>
    <form action="{{route('statuses.store')}}" method="post">
        {{--        @method('PUT')--}}
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{$status->name}}"><br>
        <input type="text" name="slug" placeholder="Type" value="{{$status->type}}"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Submit">
    </form>
@endsection
