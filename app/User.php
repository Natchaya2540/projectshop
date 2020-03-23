<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public function isdiver(){
        return $this->user_type===3;
    }

    public function isAdmin(){
        return $this->user_type===2;
    }

    public function isEmp(){
        return $this->user_type===1;
    }
// public   function order(){
//        return $this->belongsTo('App\Order');
//    }
    /**
     * The attributes that are mass assignable.
     *
     *
     * @var array
     */ protected $primaryKey ='id';
    protected $fillable =
        [

        'name', 'email', 'password','firstname','lastname','company','tel','company_address','send_address','Tex'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
