<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'teacher_id', 'name', 'slug'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id', 'id');
    }
}
