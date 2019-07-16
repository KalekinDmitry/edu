<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Http\Requests\Teacher\TeacherLoginRequest;
use App\Http\Requests\User\UserLoginRequest;

use Auth;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:teacher')->except('logout');
    }



    public function showAdminLoginForm()
    {
        return view('auth.admin-login');
    }



    public function adminLogin(AdminLoginRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('admin')->attempt($credentials, $request->remember)){
            return redirect()->intended(route('admin.dashboard'));
        }
        return back()
        ->withErrors(['email' => "Wrong email or password"])
        ->withInput($request
        ->only('email', 'remember'));
    }



    public function showTeacherLoginForm()
    {
    return view('auth.teacher-login');
    }



    public function teacherLogin(TeacherLoginRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('teacher')->attempt($credentials, $request->remember)){
            return redirect()->intended(route('teacher.dashboard'));
        }
        return back()
        ->withErrors(['email' => "Wrong email or password"])
        ->withInput($request
        ->only('email', 'remember'));
    }
}
