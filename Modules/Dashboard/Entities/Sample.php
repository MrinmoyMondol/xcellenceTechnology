<?php

namespace Modules\Dashboard\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sample extends Model
{
    use HasFactory;

    protected $fillable = [
        'sample_code','thumbnail','sample_file','description'
    ];

    protected static function newFactory()
    {
        return \Modules\Dashboard\Database\factories\SampleFactory::new();
    }
}
