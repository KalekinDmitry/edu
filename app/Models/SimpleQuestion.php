<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class SimpleQuestion extends Model
{
    use SoftDeletes;

    public const TABLE = "simple_questions";

    protected $table = self::TABLE;

    protected $fillable = [
        'task_block_id', 'text', 'keywords', 'image_link'
    ];

    public function taskBlock()
    {
        return $this->belongsTo('App\Models\TaskBlock', 'task_block_id', 'id');
    }
}
