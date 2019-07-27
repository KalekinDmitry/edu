<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassroomInvite extends Model
{
    use SoftDeletes;

    public $fillable = [
        'teacher_id', 'classroom_id', 'title', 'slug', 'message'
    ];

    public function classroom()
    {
        return $this->belongsTo('App\Course', 'classroom_id', 'id');
    }

    public function user()
    {
        return $this->belogsTo('App\User', 'user_id', 'id');
    }

}
