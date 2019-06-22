<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PaymentOrder extends Model
{
    protected $table    = 'payment_orders';
    protected $fillable = ['name'];
    public function order()
    {
      return $this->hasMany(Order::class);
    }
}
