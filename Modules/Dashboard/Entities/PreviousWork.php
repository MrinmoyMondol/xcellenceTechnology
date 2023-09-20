<?php

namespace Modules\Dashboard\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PreviousWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_type','work_title','work_link','work_file'
    ];

    protected static function newFactory()
    {
        return \Modules\Dashboard\Database\factories\PreviousWorkFactory::new();
    }
}
