<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    protected $fillable = [
        'title',
        'discription',
        'image',
        'content',
    ];
}
