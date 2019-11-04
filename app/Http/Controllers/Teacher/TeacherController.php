<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Teacher;
use Auth;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:teacher')->except('show');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $classrooms = Classroom::where('teacher_id', Auth::guard("teacher")->user()->id)->get();
        $courses = Course::where('created_by', Auth::guard("teacher")->user()->id)->get();
        return view('teacher.dashboard', ['classrooms' => $classrooms, 'courses' => $courses]);
    }

    public function edit()
    {
        $teacher = Teacher::where('id', Auth::guard("teacher")->user()->id)->first();
        return view('teacher.settings.edit', [
            'teacher' => $teacher,
        ]);
    }

    public function update(Request $request)
    {
        $teacher = Teacher::where('id', Auth::guard("teacher")->user()->id)->first();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->save();
        return redirect()->route('teacher_settings', $teacher);
    }

}
