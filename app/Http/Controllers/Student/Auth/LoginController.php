<?php

namespace App\Http\Controllers\Student\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Http\Requests\Teacher\TeacherLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

//    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     * @var string
     */
    protected $redirectTo = '/student'; // route('student.dashboard');

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:student')->except('logout','userLogout');
    }

    public function showLoginForm()
    {
        return view('student.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:6'],
        ]);

        if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('student.dashboard');
        }

        return redirect()->route('student.dashboard');
    }

    public function logout()
    {
        Auth::guard('student')->logout();

        return redirect('/');
    }
}