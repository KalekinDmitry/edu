<?php

namespace App\Policies;

use App\Models\Lesson;
use App\Models\Teacher;
use App\Models\User;
use App\Models\VideoBlock;
use Illuminate\Auth\Access\HandlesAuthorization;

class VideoBlockPolicy
{
    use HandlesAuthorization;

     /**
     * Determine whether the user can view any courses.
     *
     * @param Teacher $teacher
     * @return mixed
     */
    public function viewAny(Teacher $teacher)
    {
        // Not required
    }

    /**
     * Determine whether the user can view the course.
     *
     * @param Teacher $teacher
     * @param  \App\Models\Course $course
     * @return mixed
     */
    public function view(Teacher $teacher, videoBlock $textBlock)
    {
        // Not required
        return true;//TODO
    }

    /**
     * Determine whether the user can create courses.
     *
     * @param Teacher $teacher
     * @return mixed
     */
    public function create(Teacher $teacher, Lesson $lesson)
    {
        // This makes the middleware(auth:teacher) in the CourseController
       return true;
    }


    /**
     * Determine whether the user can create courses.
     *
     * @param Teacher $teacher
     * @return mixed
     */
    public function store(Teacher $teacher, Lesson $lesson)
    {
        // This makes the middleware(auth:teacher) in the CourseController
        return true;
    }

    /**
     * Determine whether the user can edit the course.
     *
     * @param User $teacher
     * @param  \App\Models\Module $module
     * @return mixed
     */
    public function edit(Teacher $teacher, VideoBlock $textBlock)
    {
        return true;
    }

    /**
     * Determine whether the user can update the course.
     *
     * @param Teacher $teacher
     * @param  \App\Models\Module $module
     * @return mixed
     */
    public function update(Teacher $teacher, VideoBlock $textBlock)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the course.
     *
     * @param Teacher $teacher
     * @param  \App\Models\Module
     * @return mixed
     */
    public function destroy(Teacher $teacher, VideoBlock $textBlock)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the course.
     *
     * @param Teacher $teacher
     * @param  \App\Models\Module; $module
     * @return mixed
     */
    // public function restore(Teacher $teacher, Module $module)
    // {
    //     // Not required
    // }

    /**
     * Determine whether the user can permanently delete the course.
     *
     * @param Teacher $teacher
     * @param  \App\Models\Module; $module
     * @return mixed
     */
    // public function forceDelete(Teacher $teacher, Module $module)
    // {
    //     // Not required
    // }
}
