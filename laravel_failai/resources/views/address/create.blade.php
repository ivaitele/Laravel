@extends('layouts.admin.main')

@section('title', 'Adresses')

@section('content')
    <h1>Creating address</h1>
    <span>Creating</span>
    <form action="{{route('addresses.store')}}" method="post">
        @include('address.form_fields', ['address' => null, 'argumentai' => ''])
        @csrf
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Create">
    </form>
@endsection
