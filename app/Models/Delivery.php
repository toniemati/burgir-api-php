<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
