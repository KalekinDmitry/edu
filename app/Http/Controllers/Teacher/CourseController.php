<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::where('teacher_id', Auth::guard("teacher")->user()->id)->get();
        $courses = Course::where('created_by', Auth::guard("teacher")->user()->id)->get();
        return view('teacher.course.index', ['classrooms' => $classrooms, 'courses' => $courses]);
    }

    public function create()
    {
        return view('teacher.course.create', [
            'course' => [],
            'delimiter' => ''
        ]);
    }

    public function store(Request $request)
    {
        $course = Course::create($request->all());
        $course->tags = str_replace(' ', '', $request->tags);
        $course->created_by = Auth::guard("teacher")->user()->id;

        if (!empty($request->file('image'))) {
            $path = Storage::putFile('public', $request->file('image'));
            $url = Storage::url($path);
            $course->image = $url;
        }
        $course->save();
        return redirect()->route('teacher.dashboard');
    }


    public function show(Course $course)
    {
        $modules = Module::where('course_id', $course->id)->get();
        foreach ($modules as $module) {
            $module->lessons = Lesson::where('module_id', $module->id)->get();
        }
        return view('teacher.course.show', [
            'course' => $course,
            'modules' => $modules
        ]);
    }

    public function edit(Course $course)
    {
        return view('teacher.course.edit', [
            'course' => $course,
            'delimiter' => ''
        ]);
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->except('slug'));
        $course->tags = str_replace(' ', '', $request->tags);
        if (!empty($request->file('image'))) {
            $path = Storage::putFile('public', $request->file('image'));
            $url = Storage::url($path);
            $course->image = $url;
        }
        $course->save();
        return redirect()->route('teacher.dashboard');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.show', $course);
    }
}
