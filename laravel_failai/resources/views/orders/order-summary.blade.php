@extends('layouts.admin.main')

@section('title', 'Order summary')

@php($orderTotal = 0)

@section('content')

    <div class="row">
        <div class="col s12 m6 14">
            <div class="card">
                @foreach($cart->details as $cartItem)
                    <div class="card-image">
                        <img src="{{$cartItem->product->image}}" alt="">
                        <span class="card-title">{{ $cartItem->product_name }}</span>
                    </div>
                    <div class="card-content">
                        <p>Description: {{ $cartItem->product->description }}</p>
                        <p>Price: ${{$cartItem->price}}</p>
                    </div>
                    <div>
                        <p>Quantity: {{ $cartItem->quantity }}</p>
                    </div>
                    <div>
                        <p>
                            @php($total = $cartItem->price * $cartItem->quantity)
                            @php($orderTotal += $total)
                            Total: ${{$total}}</p>
                    </div>
                @endforeach

                <div class="card-action">
{{--                    <form action="{{route('product.add_to_cart')}}" method="POST">--}}
{{--                        <input type="hidden" name="product_id" value="{{ $product->id }}">--}}
{{--                        <input type=number name="quantity" value="1">--}}
{{--                        <input type="submit" value="Į krepšelį">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
                </div>
            </div>
        </div>
        <div>
            <p>Order Total: {{$orderTotal}}</p>
        </div>
    </div>

@endsection
