<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestQuestion extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'serial_number', 'cost', 'lesson_id', 'text', 'image_link'
    ];

    public function lesson() {
        return $this->belongsTo('App\Models\Lesson', 'lesson_id', 'id');
    }
}
