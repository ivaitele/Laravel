@extends('layouts.admin.main')

@section('title', 'Editing user')

@section('content')
    <h1>Edit user</h1>
    <span>Editing {{$user->name}}</span>
    <form action="{{route('users.update', $user)}}" method="post">
        @method('PUT')
{{--        @include('users.form_fields', $user)--}}
        <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        <input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
        <input type="password" name="password" placeholder="Password" value=""><br>
        <input type="password" name="password_confirmation" placeholder="Password confirmation" value="{{old('password_confirmation')}}"><br>
        <label for="role">Choose a role:</label>
        <select name="role" id="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
            <option value="manager">Manager</option>
            <option value="prod_manager">Prod_manager</option>
        </select>
        @csrf
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
