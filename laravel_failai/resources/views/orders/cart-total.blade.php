@extends('layouts.admin.main')

@section('title', 'Products')

@php($orderTotal = 0)
@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Shopping Cart</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart->details as $cartItem)
                    <tr>
                        <td><img src="{{$cartItem->product->image}}" alt="" width="100"></td>
                        <td>{{ $cartItem->product->name }}</td>
                        <td>{{ $cartItem->product->description }}</td>
                        <td>${{$cartItem->product->price}}</td>

                        <td>
                            <form method="post" action="{{ route('cart.update-product', $cartItem->product_id) }}">
                                @csrf
                                @method('PUT')
                                <input type="number" name="quantity" value="{{ $cartItem->quantity }}" />
                                <button type="submit" data-tooltip="Šalinti"
                                        class="tooltipped waves-effect waves-light red btn-small">
                                    <i class="tiny material-icons">update</i>
                                </button>
                            </form>
                            </td>

                        <td>@php($total = $cartItem->product->price * $cartItem->quantity)
                            @php($orderTotal += $total)
                            ${{$total}}</td>
                        <td>
                            <form method="post" action="{{ route('cart.remove-product', $cartItem->product_id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" data-tooltip="Šalinti"
                                        class="tooltipped waves-effect waves-light red btn-small">
                                    <i class="tiny material-icons">delete</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <p>Order Total: ${{$orderTotal}}</p>
        </div>
    </div>
@endsection
