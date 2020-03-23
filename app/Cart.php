<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'add_cart';
    protected $primaryKey = 'id';
    protected $guarded = [];



}
