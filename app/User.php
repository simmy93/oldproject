<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lname', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    use \Illuminate\Auth\Authenticatable;
    public function events(){
        return $this->hasMany('App\Event');
    }

    public function coments(){
        return $this->hasMany('App\Coment');
    }

    public function members(){
        return $this->hasMany('App\Member');
    }

    public function socialProviders(){
        return $this->hasMany(socialProvider::class);
    }

    public function roles(){
        return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }

    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                    
                }
            }
        }else{
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role){
        if($this->roles()->where('name', $role)->first()){
            return true;
        }
        return false;
    }
}