<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Blog extends Model
{
    use softDeletes;

    protected $fillable = [
        'title', 'description','imgPath'
    ];
}
