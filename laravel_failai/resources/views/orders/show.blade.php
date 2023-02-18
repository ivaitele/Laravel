@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <div class="row">
        <div class="col s12 m6 14">
            <div class="card">
                <div class="card-image">
                    <img src="https://picsum.photos/200">
{{--                    <span class="card-title">{{ $product->name }}</span>--}}
                </div>
                <div class="card-content">
                    <div>ID: {{$order->id}}</div>
                    <p>Customer: {{ $order->user->name }}</p>
                    <p>Shipping Address: {{ $order->shippingAddress->city }}</p>
                    <p>Status: {{ $order->status->name }}</p>
                    <p>Creation date: {{ $order->created_at }}</p>
                    <p>Last updated: {{ $order->updated_at }}</p>
                </div>
                <div class="card-action">
                    <x-forms.buttons.action :model="$order" mainRoute="orders" />
                </div>
            </div>
        </div>
    </div>
@endsection
