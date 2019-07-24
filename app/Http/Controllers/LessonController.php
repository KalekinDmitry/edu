<?php

namespace App\Http\Controllers;

use App\Course;
use App\Models\Lesson;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
            return view('lesson.create', ['course' => $course]);
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

            //dd($request->input());
            $lesson = Lesson::create($request->input());

            $lesson->slug = Str::slug($lesson->title);

            $lesson->course_id = $course->id;
            $lesson->save();
            return redirect()->route('lesson.show',[$course->id, $lesson->id]);
        }
        else
        {
            return redirect()
            ->route('course.show', $course)
            ->with(['message'=>'Permission denied']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course, Lesson $lesson)
    {
        return view('lesson.show', ['lesson' => $lesson, 'course' => $course]);
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
        //dd($lesson, $course, $teacher);
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
    public function update(Request $request, Course $course, Lesson $lesson)
    {
        $teacher = Auth::user();
        if($teacher->can('update', [$lesson, $course])){
            $lesson->update($request->except('slug'));
            $lesson->save();
            return redirect()->route('lesson.show', [$course, $lesson]);
        }
        else return redirect()
        ->route('course.show', [$course, $lesson])
        ->with(['message'=>'permission enied']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course, Lesson $lesson)
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
