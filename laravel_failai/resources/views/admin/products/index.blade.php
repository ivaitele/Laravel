@extends('layouts.admin.main')

@section('title', 'Products')

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>{{__('products.product_list')}}</h1>
            <a href="{{route('products.create')}}" class="btn btn-primary">{{__('general.create')}}</a>
            <table class="table">
                <thead>
                <tr>
                    <th>{{__('products.id')}}</th>
                    <th>{{__('products.name')}}</th>
                    <th>{{__('products.description')}}</th>
                    <th>{{__('products.price')}}</th>
                    <th>{{__('products.status')}}</th>
                    <th>{{__('general.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->status->name}}</td>
                        <td>
                            <x-forms.buttons.action :model="$product" mainRoute="products" />
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
