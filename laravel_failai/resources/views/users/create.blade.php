@extends('layouts.admin.main')

@section('title', 'New User')

@section('content')
    <h1>New user</h1>
    <form action="{{route('users.store')}}" method="post">
        @csrf
        @include('users.form_fields', ['user' => null])
        <input type="password" name="password" placeholder="Password"> value="{{$user->password}}"<br>
        <input type="password" name="password_confirmation" placeholder="Password confirmation"><br>

        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Submit">
    </form>
@endsection
