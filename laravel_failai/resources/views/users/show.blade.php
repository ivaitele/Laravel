@extends('layouts.admin.main')

@section('title', 'Vartotojo informacija')

@section('content')
    <div class="row">
        <div class="col s12 m6 14">
            <div class="card">
                <div class="card-image">
                    <img src="https://picsum.photos/200">
                    <span class="card-title">{{ $user->name }}</span>
                </div>
                <div class="card-content">
                    <div>ID: {{$user->id}}</div>
                    <p>User name: {{ $user->name }}</p>
                    <p>Email: {{ $user->email }}</p>
                    <p>Role: {{ $user->role }}</p>
                    <p>Creation date: {{ $user->created_at }}</p>
                    <p>Last updated: {{ $user->updated_at }}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$user" mainRoute="users" />
                </div>
            </div>
        </div>
    </div>
@endsection
