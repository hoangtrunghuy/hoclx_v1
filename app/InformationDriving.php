<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformationDriving extends Model
{
    protected $fillable = [
        'title',
        'discription',
        'content',
        'image',
        'user_id',
    ];
}
