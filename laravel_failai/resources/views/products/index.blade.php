@extends('layouts.admin.main')

@section('title', 'Products')

@section('content')
    <div class="row">
        <div class="col s12">
            <pre>PUBLIC</pre>
            <h1>{{__('products.product_list')}}</h1>
            <table class="table">
                <thead>
                <tr>
                    <td></td>
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
                        <td><img src="{{$product->image}}" alt="" width="100"></td>

                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->status->name}}</td>
                        <td>
{{--                            <x-forms.buttons.action :model="$product" mainRoute="products" />--}}
{{--                            <button>Add to cart</button>--}}
                            <form action="{{route('product.add_to_cart')}}" method="POST">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type=number name="quantity" value="1">
                                <input type="submit" value="Į krepšelį">
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
