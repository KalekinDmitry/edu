<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TextBlock extends Model
{
    use SoftDeletes;

    public const TABLE = "text_blocks";

    protected $table = self::TABLE;

    protected $fillable = [
        'lesson_id', 'position', 'content'
    ];

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson', 'lesson_id', 'id');
    }
}
