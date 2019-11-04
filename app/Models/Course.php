<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property int id
 * @property int created_by
 * @property int cost
 * @property string title
 * @property string slug
 * @property string description
 * @property string description_short
 * @property string tags
 * @property string image
 * @property string video
 * @property \DateTime created_at
 * @property \DateTime updated_at
 */
class Course extends Model
{
    public const TABLE = "courses";

    protected $table = self::TABLE;

    // Mass assigned
    protected $fillable = ['title', 'slug', 'description_short', 'description', 'tags', 'image', 'video', 'created_by', 'cost'];

    // Mutators
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($this->id . rand(100, 999) . mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'created_by', 'id');
    }

    public function modules()
    {
        return $this->hasMany("App\Models\Module","course_id","id")->get();
    }

    public function classrooms()
    {
        return $this->belongsToMany('App\Models\Classroom', 'classroom_course', 'course_id', 'classroom_id');
    }
}
