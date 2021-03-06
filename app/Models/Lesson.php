<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

/**
 * Class Lesson
 * @package App\Models
 *
 * @property int id
 * @property int module_id
 * @property int position
 * @property string title
 * @property string slug
 * @property string excerpt
 * @property boolean is_published
 * @property \DateTime published_at
 * @property \DateTime created_at
 * @property \DateTime updated_at
 * @property \DateTime deleted_at
 */
class Lesson extends Model
{
    use SoftDeletes;

    public const TABLE = "lessons";

    protected $table = self::TABLE;

    protected $fillable =  [
        'title', 'excerpt', 'is_published',
    ];

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        self::creating(function (Lesson $model){
            $model->slug = Str::slug($model->title);
            $model->position = self::where('module_id', $model->module_id)->max('position') + 1;
        });
    }

    public function module()
    {
        return $this->belongsTo('App\Models\Module', 'module_id', 'id')->get();
    }

    public function texts()
    {
        return $this->hasMany("App\Models\TextBlock","lesson_id","id")->get();
    }

    public function videos()
    {
        return $this->hasMany("App\Models\VideoBlock","lesson_id","id")->get();
    }

    public function tasks()
    {
        return $this->hasMany("App\Models\TaskBlock","lesson_id","id")->get();
    }

}

