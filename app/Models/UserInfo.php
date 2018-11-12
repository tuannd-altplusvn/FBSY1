<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model implements HasPresenter
{
    protected $table = 'user_infos';

    protected $fillable = [
        'user_name', 'first_name', 'last_name', 'address', 'avatar', 'phone_number'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
