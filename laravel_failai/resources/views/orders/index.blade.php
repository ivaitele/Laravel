@extends('layouts.admin.main')

@section('title', __('orders.order_list'))

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>{{__('orders.order_list')}}</h1>
            <a href="{{route('orders.create')}}" class="btn btn-primary">{{__('orders.add_new')}}</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>{{__('orders.user')}}</th>
                    <th>{{__('orders.shipping_address')}}</th>
                    <th>{{__('orders.status')}}</th>
                    <th>{{__('general.created_at')}}</th>
                    <th>{{__('general.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->shippingAddress->city}}</td>
                        <td>{{$order->status->name}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>
                            <x-forms.buttons.action :model="$order" mainRoute="orders" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
