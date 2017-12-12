<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function coments(){
    	return $this->hasMany('App\Coment');
    }

    public function members(){
    	return $this->hasMany('App\Member');
    }
}
