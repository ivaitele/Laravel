@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Adresses</h1>
            <a href="{{route('addresses.create')}}" class="btn btn-primary">Create</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Street</th>
                    <th>House_number</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($addresses as $address)
                    <tr>
                        <td>{{$address->id}}</td>
                        <td>{{$address->country}}</td>
                        <td>{{$address->city}}</td>
                        <td>{{$address->street}}</td>
                        <td>{{$address->house_number}}</td>
                        <td>
                            <a href="{{route('addresses.edit', $address->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('addresses.destroy', $address->id)}}" method="post">
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
