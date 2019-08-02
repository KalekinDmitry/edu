<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Models\ClassroomInvite;

class ClassroomInviteController extends Controller
{


    public function __construct()
    {
        //$this->middleware('auth:teacher');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(__METHOD__);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Classroom $classroom, User $user)
    {

        return  view('classroom.invite.create', ['classroom' => $classroom, 'user' => $user] );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Classroom $classroom, User $user)
    {
        $classroomInvite = ClassroomInvite::create($request->input());
        $classroomInvite->classroom_id = $classroom->id;
        $classroomInvite->user_id = $user->id;
        $classroomInvite->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        dd(__METHOD__);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        dd(__METHOD__);
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
        dd(__METHOD__);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom, User $user, ClassroomInvite $invite)
    {
        //dd($invite);

        $invite->delete();
        return redirect()->route('user.invites');

    }
}