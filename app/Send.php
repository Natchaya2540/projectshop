<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
    protected $table ='send_orders';
    protected $primaryKey ='id';
    protected $fillable =['send_day','send_time','total','employee_EmpId','	status_has_send_orders_id','id_orders','details'];
}
