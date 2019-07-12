<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class TeacherLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:teacher');
    }

    public function showLoginForm()
    {
        return view('auth.teacher-login');
    }

    public function login(Request $request)
    {
        //return true;

        $this->validate($request, [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('teacher')->attempt($credentials, $request->remember)){
            return redirect()->intended(route('teacher.dashboard'));//if loged in then redirect to the dashboard
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
