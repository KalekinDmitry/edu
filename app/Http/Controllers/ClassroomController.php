<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassroomController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth.teacher')->except('show');
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
    public function create()
    {
        $teacher = Auth::user();
        if($teacher->can('create', [Classroom::class])){
            return view('classroom.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = Auth::user();

        if($teacher->can('store', [Classroom::class])){
            $classroom = Classroom::create($request->input());
            $classroom->slug = Str::slug($classroom->name);
            $classroom->teacher_id = $teacher->id;
            $classroom->save();
            return redirect()->route('classroom.show',$classroom);
        }else{
            return redirect()->route('teacher.dashboard')->with(['message' => 'Permission denied']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        return view('classroom.show', $classroom);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        $teacher = Auth::user();

        if($teacher->can('edit', $classroom )){
            return view('classroom.edit',  $classroom);
        } else return redirect()
        ->route('teacher.dashboard')
        ->with(['message' => 'permission denied']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $teacher = Auth::user();
        if($teacher->can('update', $classroom)){
            $classroom->update($request->excerpt('slug'));
            $classroom->save();
            return redirect()->route('classroom.show', $classroom);
        }else{
            return redirect()->route('classroom.show', $classroom)->with(['message'=>'Permission denied']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        $teacher = Auth::user();
        if($teacher->can('destroy', $classroom)){
            $classroom->delete();
            return redirect()->route('teacher.dashboard');
        }else return redirect()->route('teacher.dashboard')->with(['message' => 'Permission denied']);
    }
}
