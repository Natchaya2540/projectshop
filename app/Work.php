<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='orders';
    protected $primaryKey ='id';
    protected $fillable =['employee_EmpId',];
//    public function user(){
//        return $this->hasOne('App\User', 'id', 'user_ID','send_address','tel');
//    }

}
