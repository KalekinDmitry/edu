<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;
    //
    protected $fillable =  [
        'course_id', 'title',  'slug', 'excerpt', 'content_html'
    ];


    public function course()
    {
        // return $this->belongsTo(Course::class);
        return $this->belongsTo('App\Course', 'course_id', 'id');
    }

}

