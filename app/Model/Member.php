<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
        'id','name', 'nik', 'address', 'gender', 'birth_of_place', 'date_of_birth', 'number_phone', 'email', 'created_at', 'updated_at',
    ];
    
    public function order()
    {
      return $this->hasMany(Order::class);
    }
}
