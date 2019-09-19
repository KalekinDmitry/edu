<?php

namespace App\Providers;

use App\Models\Lesson;
use App\Policies\LessonPolicy;

use App\Models\Classroom;
use App\Policies\ClassroomPolicy;

use Illuminate\Support\Facades\Gate;
use App\Course;
use App\Policies\CoursePolicy;

use App\Models\Module;
use App\Policies\ModulePolicy;

use App\Models\TextBlock;
use App\Policies\TextBlockPolicy;

use App\Models\VideoBlock;
use App\Policies\VideoBlockPolicy;

use App\Models\TaskBlock;
use App\Policies\TaskBlockPolicy;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Lesson::class => LessonPolicy::class,
        Classroom::class => ClassroomPolicy::class,
        'App\Model' => 'App\Policies\ModelPolicy',
        Course::class => CoursePolicy::class,
        Module::class => ModulePolicy::class,
        TextBlock::class => TextBlockPolicy::class,
        VideoBlock::class => VideoBlockPolicy::class,
        TaskBlock::class => TaskBlockPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
