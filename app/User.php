<?php

namespace App;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Social\Facebook;
use App\Models\Social\Google;
use Hash;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable        
{   
    use HasApiTokens;
    use Notifiable;
    use HasRoles;

  
   
    protected $fillable = [
        'name', 'email', 'password','api_token','verify_token','auth_type','auth_id','auth_token','avatar_url',
    ];

    
    protected $hidden = [
        'password', 'remember_token','api_token','verify_token'
    ];

    public function profile(){
        return $this->hasOne('App\Models\Profile');
    }

    public function google(){
        return $this->hasOne(Google::class,'user_id','id');
    }
    
    public function instagram(){
        return $this->hasOne(Instagram::class,'user_id','id');
    }

    public function facebook(){
        return $this->hasOne(Facebook::class,'user_id','id');
    }


    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }
    
    public function role()
    {
        return $this
        ->belongsToMany(Role::class, 'role_user')
        ->orderBy('created_at', 'DESC');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function verified(){
        return $this->verifyToken === null;
    }

    public function SendVerificationEmail(){

        //$this->notify(new verifyEmail($this));
        //VerifyEmail::dispatch($this);
    }


    /*public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }*/
    





    
}
