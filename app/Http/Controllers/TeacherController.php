<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth:teacher');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('custom.teacher.dashboard');
    }

    public function show(Request $request)
    {
        if ($user = Teacher::where('id', $request->id)->first()) {
            //"Password protection"
            $user->password = NULL;
        } else {
            //Redirect to yourself
            $user = Teacher::where('id', Auth::user()->id)->first();
        }
        return view('user.profile.show', [

            'user' => $user,
        ]);
    }

    public function edit()
    {
        $user = Teacher::where('id', Auth::user()->id)->first();
        return view('user.settings.edit', [
            'user' => $user,
        ]);
    }

}
