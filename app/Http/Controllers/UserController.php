<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request)
    {
        if ($user = User::where('id', $request->id)->first()) {
            //"Password protection"
            $user->password = NULL;
        }
        else{
            //Redirect to yourself
            $user = User::where('id', Auth::user()->id)->first();
        }
        return view('user.profile.show', [
            'user' => $user,
        ]);
    }

    public function edit(){
        $user = User::where('id', Auth::user()->id)->first();
        return view('user.settings.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
//        $course->update($request->except('slug'));
//
//        $course->tags=str_replace(' ', '', $request->tags);;
//
//        $course->save();
//
//        return redirect()->route('course.show', $course);

    }
}
