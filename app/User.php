<?php

namespace App;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username', 'email', 'password','uid','provider','avatar'
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

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
    // 一个user 有很多 issues。
    public function issues()
    {
        return $this->hasMany('App\Models\Issue');
    }
    /**
     * 用户头像
     * @return mixed|string
     */
    public function avatar()
    {
        return $this->avatar ? $this->avatar : "https://www.gravatar.com/avatar/" . md5(strtolower($this->email)) . "?d=retro&s=48";
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
