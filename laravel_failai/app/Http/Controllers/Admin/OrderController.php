<?php

namespace App\Http\Controllers\Admin;

use App\Events\OrderCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\Status;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Order::class);
    }

    public function index()
    {
        $orders = Order::query()->with(['shippingAddress', 'status'])->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(OrderRequest $request)
    {
        $order = Order::create($request->all()
            + [
                'status_id' => Status::query()->where(['type' => 'order', 'name' => Status::STATE_NEW])->first()->id,
            ],
        );

        $this->dispatch(new OrderCreated($order));

        // Informuoti vadybininka apie nauja uzsakyma

        return redirect()->route('orders.show', $order);
    }

    public function show(Order $order)
    {
        return view('orders.show', ['order' => $order]);
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('orders.show', $order);
    }

    public function hello() {
        return 'HELLO';
    }

    public function destroy(Order $order)
    {
//        $order->delete();
        return redirect()->route('orders.hello');
    }
}
