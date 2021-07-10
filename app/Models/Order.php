<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='order';

    public function order_detail(){
        return $this->hasMany(Order_Detail::class, 'id_order', 'id');
    }

    public function customers(){
        return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }
}
