<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoBlock extends Model
{
    use SoftDeletes;

    public const TABLE = "video_blocks";

    protected $table = self::TABLE;

    protected $fillable = [
        'link', 'position', 'lesson_id'
    ];

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson', 'lesson_id', 'id');
    }
}
