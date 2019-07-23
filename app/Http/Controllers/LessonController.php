<?php

namespace App\Http\Controllers;

use App\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:teacher')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Course $course
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        $teacher = Auth::user();
        if($teacher->can('create', [Lesson::class, $course])){
            return view('lesson.create');
        }else {
            return redirect()
            ->route('course.show', $course)
            ->with(['message'=>'Permisson denied']);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course)
    {
        $teacher = Auth::user();
        if($teacher->can('store', [Lesson::class, $course])){
            $lesson = Lesson::create($request->all());
            $lesson->slug = Str::slug($lesson->title);
            $lesson->course_id = $course->id;
            $lesson->save();
            return redirect()->route('lesson.show', $lesson->id);
        }
        else return redirect()
        ->route('course.show', $course)
        ->with(['message'=>'Permission denied']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        return view('lesson.show', ['lesson' => $lesson]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Course $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, Lesson $lesson)
    {
        $teacher = Auth::user();
        if($teacher->can('edit', [$lesson, $course])){
            return view('lesson.edit', ['lesson' => $lesson, 'course' => $course]);
        }else return redirect()
        ->route('course.show', $course)
        ->with(['message' => 'permission denied']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson, Course $course)
    {
        $teacher = Auth::user();
        if($teacher->can('update', [$lesson, $course])){
            $lesson->update($request->except('slug'));
            $lesson->save();
            return redirect()->route('lesson.show', $lesson);
        }
        else return redirect()
        ->route('course.show', $course)
        ->with(['message'=>'permission enied']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson, Course $course)
    {
        $teacher = Auth::user();
        if($teacher->can('destroy', [$lesson, $course])){
            $lesson->delete();
            return redirect()->route('course.show', $course);
        } else return redirect()
        ->route('course.show', $course)
        ->with(['message'=>'permission denied']);

    }
}
