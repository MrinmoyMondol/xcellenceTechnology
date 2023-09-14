<?php

namespace Modules\Dashboard\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','phone','email','company','address'
    ];

    protected static function newFactory()
    {
        return \Modules\Dashboard\Database\factories\ClientFactory::new();
    }
}
