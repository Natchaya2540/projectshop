<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='orders';
     protected $primaryKey ='id_orders';
    protected $fillable =['order_date','order_time','user_ID','employee_EmpId','send_has_orders_status_ID'];
   public function user(){
        return $this->hasOne('App\User', 'id', 'user_ID','send_address','tel','employee_EmpId');
    }

}
