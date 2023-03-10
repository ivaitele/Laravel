@extends('layouts.admin.main')

@section('title', 'Pavadinimas')

@section('content')
    <div class="row">
        <div class="col s12 m6 14">
            <div class="card">
                <div class="card-image">
                    <img src="{{$product->image}}" alt="">
                    <span class="card-title">{{ $product->name }}</span>
                </div>
                <div class="card-content">
                    <div>ID: {{$product->id}}</div>
                    <p>Name: {{ $product->name }}</p>
                    <p>Description: {{ $product->description }}</p>
                    <p>Categories: {{ $product->category->name }}</p>
                    <p>Size: {{ $product->size }}</p>
                    <p>Color: {{ $product->color }}</p>
                    <p>Price: {{ $product->price }}</p>
                </div>
                <div class="card-action">
                    <form action="{{route('product.add_to_cart')}}" method="POST">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type=number name="quantity" value="1">
                        <input type="submit" value="Į krepšelį">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

