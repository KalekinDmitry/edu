<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassroomInvite extends Model
{
    use SoftDeletes;

    public const TABLE = "classroom_invites";

    protected $table = self::TABLE;

    protected $fillable = [
        'user_id', 'classroom_id', 'message_title', 'title_slug', 'message_text',
    ];

    public function classroom()
    {
        return $this->belongsTo('App\Models\Course', 'classroom_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}
