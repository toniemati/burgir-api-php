<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function deliveryCar()
    {
        return $this->hasOneThrough(Car::class, Delivery::class, 'id', 'id', 'id');
    }

    public function deliveryEmployee()
    {
        return $this->hasOneThrough(Employee::class, Delivery::class, 'id', 'id', 'id');
    }
}
