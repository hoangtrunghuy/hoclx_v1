<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'id',
        'question_type',
        'question_content',
        'question_img',
        'question_ansA',
        'question_ansB',
        'question_ansC',
        'question_ansD',
        'question_answerTrue'
    ];
}
