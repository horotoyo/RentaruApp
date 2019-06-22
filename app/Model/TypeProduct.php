<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
  protected $table      = 'type_products';
  protected $fillable   = ['name'];
  public function product()
  {
    return $this->hasMany(Product::class);
  }
}
