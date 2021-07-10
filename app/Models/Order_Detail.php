<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table ='order_detail';

    public function products(){
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    public function orders(){
        return $this->belongsTo(Order::class, 'id_order', 'id');
    }

}
