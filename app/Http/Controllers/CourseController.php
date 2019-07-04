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
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        dd($slug);
        $course = Course::where('slug', $slug)->first();
        return view('course.index', [
            'course' => $course,
        ]);
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
//        dd($request->file('image'));
        $course = Course::create($request->all());

        $path = Storage::putFile('public', $request->file('image'));

        $url = Storage::url($path);

        $course->image = $url;

        $course->save();

        return redirect()->route('home', $course);


//        dd($request->file('files'));

//        if ($request->file('files') != NULL) {


//            $course = Course::create($request->all());


//        } else {
//            $course = Course::create($request->all());
//        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Course $course
     * @return void
     */
    public function show(Course $course)
    {
        // Not yet required
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Course $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('course.edit', [
            'course' => $course,
            'delimiter' => ''
        ]);
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
        $course->update($request->except('slug'));

        return redirect()->route('course.index', $course);

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

        $course->delete();

        return redirect()->route('course.index');

    }

}