<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    protected $fillable = [
        'feedback_content',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);

//        admin
////            -Feedback
////            -Question
////            -User
////        client
////            -home
////            -cauhoi
////        layouts

    }
}
