@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <h1>{{__('orders.order_new')}}</h1>
    <form action="{{route('orders.store')}}" method="post">
        @include('orders.form_fields', ['order' => null, 'argumentai' => ''])
        @csrf
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Submit">
    </form>
@endsection
