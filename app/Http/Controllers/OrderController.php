<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Delivery;
use App\Models\Employee;
use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('customer', 'products', 'delivery', 'deliveryCar', 'deliveryEmployee')->orderBy('id', 'desc')->get();

        return $orders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = Order::create(['customer_id' => $request->customer_id]);

        $products_array = [];

        foreach ($request->get('products') as $product) {
            for ($i = 0; $i < $product['quantity']; $i++) {
                $products_array[] = $product['product_id'];
            }
        }

        $order->products()->attach($products_array);

        $free_car = Car::where('bussy', false)->get()->random();
        $free_employee = Employee::where('bussy', false)->get()->random();

        $delivery = Delivery::create([
            'distance' => rand(1, 50),
            'order_id' => $order->id,
            'car_id' => $free_car->id ?? null,
            'employee_id' => $free_employee->id ?? null
        ]);

        $order->delivery = $delivery;

        if ($free_car) {
            $free_car->update(['mileage' => $free_car->mileage + $delivery->distance]);
        }

        return $order;
    }

    /**
     * Display the specified resource.
     *
    //  * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return
            Order::with('customer', 'products', 'delivery', 'deliveryCar', 'deliveryEmployee')->find($id)
            ?? ['message' => "Nie znaleziono zamówienia z id {$id}"];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
