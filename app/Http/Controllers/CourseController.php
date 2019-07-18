<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:teacher')->except('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        // Not yet required
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create', [
            'course' => [],
            'delimiter' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($user = Auth::user()->name);
        $course = Course::create($request->all());
        $course->tags = str_replace(' ', '', $request->tags);
        $course->created_by = Auth::user()->id;

        if (!empty($request->file('image'))) {
            $path = Storage::putFile('public', $request->file('image'));
            $url = Storage::url($path);
            $course->image = $url;
        }
        $course->save();
        return redirect()->route('course.show', $course);
    }


    /**
     * Display the specified resource.
     *
     * @param Course $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('course.show', [
            'course' => $course,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Course $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $teacher = Auth::user();
        if ($teacher->can('edit', $course)) {
            return view('course.edit', [
                'course' => $course,
                'delimiter' => ''
            ]);
        } else return redirect()->route('course.show', $course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Course $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $user = Auth::user();
        if ($user->can('update', $course)) {
            $course->update($request->except('slug'));
            $course->tags = str_replace(' ', '', $request->tags);;
            if (!empty($request->file('image'))) {
                $path = Storage::putFile('public', $request->file('image'));
                $url = Storage::url($path);
                $course->image = $url;
            }
            $course->save();
            return redirect()->route('course.show', $course);
        } else return redirect()->route('course.show', $course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Course $course
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Course $course)
    {
        $user = Auth::user();
        if ($user->can('destroy', $course)) {
            $course->delete();
            return redirect()->route('home');
        } else return redirect()->route('course.show', $course);

    }
}