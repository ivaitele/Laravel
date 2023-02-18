@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <h1>Editing </h1>
    <span>Redagavimo forma</span>
    <form action="{{route('orders.update', $order->id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="user_id" placeholder="User ID" value="{{$order?->user_id}}"><br>
        <input type="text" name="shipping_address_id" placeholder="Shipping address ID" value="{{$order?->shipping_address_id}}"><br>
        <input type="text" name="billing_address_id" placeholder="Billing address ID" value="{{$order?->billing_address_id}}"><br>
        <input type="text" name="status_id" placeholder="Status Id" value="{{$order?->status_id}}"><br>
        <hr>
        <input type="submit" class="waves-effect waves-light btn" value="Submit">
    </form>
@endsection
