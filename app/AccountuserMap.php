<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AccountuserMap extends Model
{
     protected $table = 'account_user_map';
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','Account_id','created_by'
    ];

     public function getAccountdetail(){
        return $this->hasOne('App\user','id','user_id');
    }

}
