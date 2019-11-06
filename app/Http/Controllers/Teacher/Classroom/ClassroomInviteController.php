<?php

namespace App\Http\Controllers\Teacher\Classroom;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\ClassroomInvite;
use App\Models\User;
use Illuminate\Http\Request;

class ClassroomInviteController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:teacher')->except('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        dd(__METHOD__);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Classroom $classroom
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function create(Classroom $classroom, User $user)
    {

        return  view('teacher.classroom.invite.create', ['classroom' => $classroom, 'user' => $user] );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Classroom $classroom
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Classroom $classroom, User $user)
    {
        $classroomInvite = ClassroomInvite::create($request->input());
        $classroomInvite->classroom_id = $classroom->id;
        $classroomInvite->user_id = $user->id;
        $classroomInvite->save();

        return redirect()->route('teacher.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param Classroom $classroom
     * @return void
     */
    public function show(Classroom $classroom)
    {
        dd(__METHOD__);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Classroom $classroom
     * @return void
     */
    public function edit(Classroom $classroom)
    {
        dd(__METHOD__);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Classroom $classroom
     * @return void
     */
    public function update(Request $request, Classroom $classroom)
    {
        dd(__METHOD__);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Classroom $classroom
     * @param User $user
     * @param ClassroomInvite $invite
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Classroom $classroom, User $user, ClassroomInvite $invite)
    {
        //dd($invite);

        $invite->delete();
        return redirect()->route('student.dashboard');
        //TODO: возможно необходимо перенести эту функцию в классрум контроллер студента
    }
}
