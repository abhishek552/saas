<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Auth;

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
        return $this->hasOne('App\AccountuserMap','account_id')->where('created_by',Auth::user()->id);
    }
}
