<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestAnswer extends Model
{
    //

    protected $fillable = [
        'question_id', 'answer_text', 'is_correct'
    ];

    public function question()
    {
        return $this->belongsTo('App\Models\TestQuestions', 'question_id', 'id');
    }
}
