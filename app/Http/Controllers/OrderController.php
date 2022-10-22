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
        $orders = Order::with('customer', 'products', 'delivery', 'deliveryCar', 'deliveryEmployee')->get();

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

        foreach ($request->get('products') ?? [] as $item) {
            for ($i = 0; $i < $item['quantity']; $i++) {
                DB::insert('insert into order_product (order_id, product_id) values (?, ?)', [$order->id, $item['product_id']]);
            }
        }

        try {
            $free_car = Car::where('bussy', false)->get()->random();
        } catch (Exception $e) {
            $free_car = null;
        }

        try {
            $free_employee = Employee::where('bussy', false)->get()->random();
        } catch (Exception $e) {
            $free_employee = null;
        }

        $delivery = Delivery::create([
            'distance' => rand(1, 99),
            'order_id' => $order->id,
            'employee_id' => $free_car->id ?? null,
            'car_id' => $free_employee->id ?? null
        ]);

        if ($free_car) $free_car->update(['bussy' => true]);
        if ($free_employee) $free_employee->update(['bussy' => true]);

        $order->delivery_car = $free_car;
        $order->delivery_employee = $free_employee;
        $order->delivery = $delivery;

        return Order::with('customer', 'products', 'delivery', 'deliveryCar', 'deliveryEmployee')->findOrFail($order->id);
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
