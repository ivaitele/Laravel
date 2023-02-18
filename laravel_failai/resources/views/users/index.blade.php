@extends('layouts.admin.main')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Users</h1>
            <a href="{{route('users.create')}}" class="btn btn-primary">Create</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Email_verified_at</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->email_verfied_at}}</td>
                        <td>
                            <x-forms.buttons.action :model="$user" mainRoute="users" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
