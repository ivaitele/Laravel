@extends('layouts.admin.main')

@section('title', 'Statuses')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Statuses</h1>
            <a href="{{route('statuses.create')}}" class="btn btn-primary">Create</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($statuses as $status)
                    <tr>
                        <td>{{$status->id}}</td>
                        <td>{{$status->name}}</td>
                        <td>{{$status->type}}</td>
                        <td>
                            <a href="{{route('statuses.edit', $status->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('statuses.destroy', $status->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
