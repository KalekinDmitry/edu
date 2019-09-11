<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;


class ModuleController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        return view('module.create', ['course' => $course]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course)
    {
            $module = Module::create($request->input());
            $module->course_id = $course->id;
            $module->position = Module::where('course_id', $course->id)->max('position') + 1;

            $module->save();
            return redirect()->route('course.show', $course);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
        // $lessons = Lesson::where('module_id', $module->id)->get();

        // return view('module.show', [
        //     'module' => $module,
        //     'lessons' => $lessons
        // ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        //
        //return view('module.edit', ['module' => $module, 'course' => $module->course_id]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
