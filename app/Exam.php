<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
    	'user_id',
        'exam_id',
        'question_id',
        'exam_score'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
