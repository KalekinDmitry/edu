<?php

namespace App\Http\Controllers\Student;

use App\User;
use Illuminate\Http\Request;
use App\Models\ClassroomInvite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        $invites = ClassroomInvite::where('user_id', $user->id)->get();

        return view('student.dashboard',['invites' => $invites]);
    }

    public function edit()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('student.settings.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->skills = $request->skills;
        $user->hobbies = $request->hobbies;
        $user->signature = $request->signature;
        $user->sex = $request->sex;
        $user->status = $request->status;
        $file = $request->file('image');
        if (!empty($file)) {
            $path = Storage::putFile('public', $request->file('image'));
            $url = Storage::url($path);
            $user->avatar = $url;
        }
        $user->save();
        return redirect()->route('user_settings', $user);
    }
}
