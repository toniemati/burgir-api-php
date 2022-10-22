<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function delivery()
    {
        return $this->hasOne(Delivery::class);
    }

    public function deliveryCar()
    {
        return $this->hasOneThrough(Car::class, Delivery::class, 'id', 'id', null, 'car_id');
    }

    public function deliveryEmployee()
    {
        return $this->hasOneThrough(Employee::class, Delivery::class, 'id', 'id', null, 'employee_id');
    }
}
