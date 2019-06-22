<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded    = ['id'];
    public function member()
    {
      return $this->belongsTo(Member::class);
    }
    public function orderDetail()
    {
      return $this->hasMany(OrderDetail::class);
    }
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
