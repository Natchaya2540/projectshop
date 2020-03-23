<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table ='users';
    protected $primaryKey ='id';
    protected $fillable =[
        'name', 'email', 'password','firstname','lastname','company','tel','company_address','send_address','Tex'
    ];
}
