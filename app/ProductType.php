<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table ='product_types';
    protected $primaryKey ='id';
    protected $fillable =['name'];
}
