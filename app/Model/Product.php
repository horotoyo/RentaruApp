<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded    = ['id'];
    public function typeProduct()
    {
      return $this->belongsTo(TypeOrder::class);
    }
}
