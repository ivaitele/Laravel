@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <h1>Edit address</h1>
    <span>Editing {{$address->name}}</span>
    <form action="{{route('addresses.update', $address)}}" method="post">
        @method('PUT')
        @include('address.form_fields', $address)
        @csrf
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Update">
    </form>
@endsection
