@extends('layouts.admin.main')

@section('title', 'Dashboard')

@section('content')
    Cia bus admin dashboard:
    <h2>Orders</h2>
    @foreach($latestOrders as $order)
        <div class="card">
            <div class="card-content">
                <span class="card-title">Order #{{ $order->id }}</span>
                <p>Created at: {{ $order->created_at }}</p>
                <p>Updated at: {{ $order->updated_at }}</p>
                <p>Order status: {{ $order->status->name }}</p>
                {{--            <p>Order total: {{ $order->total }}</p>--}}
                {{--            <p>Order items: {{ $order->items }}</p>--}}
            </div>
            <div class="card-action">
                <a href="{{ route('orders.show', $order) }}">View</a>
            </div>
        </div>
    @endforeach

    <h2>Products</h2>
    @foreach($latestProducts as $product)
        <div class="card">
            <div class="card-content">
                <span class="card-title">Product #{{ $product->id }}</span>
                <p>Created at: {{ $product->created_at }}</p>
                <p>Updated at: {{ $product->updated_at }}</p>
                <p>Product name: {{ $product->name }}</p>
                <p>Product price: {{ $product->price }}</p>
                <p>Product description: {{ $product->description }}</p>
                <p>Product category: {{ $product->category->name }}</p>
            </div>
            <div class="card-action">
                <a href="{{ route('products.show', $product) }}">View</a>
            </div>
        </div>
    @endforeach

    <h2>Users</h2>
    @foreach($latestUsers as $user)
        <div class="card">
            <div class="card-content">
                <span class="card-title">User #{{ $user->id }}</span>
                <p>Created at: {{ $user->created_at }}</p>
                <p>Updated at: {{ $user->updated_at }}</p>
                <p>User name: {{ $user->name }}</p>
                <p>User email: {{ $user->email }}</p>
            </div>
            <div class="card-action">
                <a href="{{ route('users.show', $user) }}">View</a>
            </div>
        </div>
    @endforeach
@endsection
