<?php

namespace Modules\Dashboard\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory , Notifiable;


    protected $guard = 'productAdmin';

    protected $fillable = [
        'user_name', 'email', 'password','fName','lName','phone','address','avatar'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function newFactory()
    {
        return \Modules\Dashboard\Database\factories\AdminFactory::new();
    }
}
