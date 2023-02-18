@extends('layouts.admin.main')

@section('title', 'Persons')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Persons</h1>
            <a href="{{route('persons.create')}}" class="btn btn-primary">Create</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($persons as $person)
                    <tr>
                        <td>{{$person->id}}</td>
                        <td>{{$person->name}}</td>
                        <td>{{$person->surname}}</td>
                        <td>{{$person->email}}</td>
                        <td>
                            <x-forms.buttons.action :model="$person" mainRoute="persons" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
