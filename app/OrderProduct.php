<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table ='order_has_products';
    protected $primaryKey ='id';
    protected $fillable =['id_orders','products_id','price','quantity','total','name'];
}
