<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Account extends Model
{
	protected $table = 'account';
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_name','description'
    ];

    public function getAccountmap(){
        return $this->hasOne('App\AccountuserMap','Account_id');
    }
}
