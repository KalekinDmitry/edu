<?php

namespace App\Policies;

use App\Models\Teacher;
use App\Course;
use App\Models\Lesson;
use Illuminate\Auth\Access\HandlesAuthorization;

class LessonPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @param Course $course
     */
    public function  create(Teacher $teacher, Course $course){

        //dd(__METHOD__, $course);
        return $teacher->id == $course->created_by;
    }

    public function  store(Teacher $teacher, Course $course)
    {
        return $teacher->id == $course->created_by;
    }

    public function  edit(Teacher $teacher, Lesson $lesson, Course $course)
    {
       // return $lesson->course_id == $course->id && $teacher->id == $course->created_by;
    }

    public function  update(Teacher $teacher, Lesson $lesson, Course $course)
    {
        //return $lesson->course_id == $course->id && $teacher->id == $course->created_by;
    }

    public function  destroy(Teacher $teacher, Lesson $lesson, Course $course)
    {
        //return $lesson->course_id == $course->id && $teacher->id == $course->created_by;
    }

    /*public function  forceDelete(Teacher $teacher, Lesson $lesson, Course $course)
    {
        //return $lesson->course_id == $course->id && $teacher->id == $course->creator_id;
    }*/
}