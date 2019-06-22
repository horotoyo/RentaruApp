<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = ['id'];
    public function order()
    {
      return $this->hasMany(Order::class);
    }
}
