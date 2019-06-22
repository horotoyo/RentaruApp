<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table    = 'order_details';
    protected $guarded  = ['id'];
    public function order()
    {
      return $this->belongsTo(Order::class);
    }
}
