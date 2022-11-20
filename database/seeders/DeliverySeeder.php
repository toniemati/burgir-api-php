<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = \App\Models\Order::all();

        foreach ($orders as $order) {
            $distance = rand(1, 50);
            $employee = \App\Models\Employee::inRandomOrder()->get()->first();
            $car = \App\Models\Car::inRandomOrder()->get()->first();

            $car->update([
                'mileage' => $car->mileage + $distance
            ]);

            \App\Models\Delivery::create([
                'distance' => $distance,
                'delivered' => true,
                'order_id' => $order->id,
                'employee_id' => $employee->id,
                'car_id' => $car->id,
            ]);
        }
    }
}
