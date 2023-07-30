<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    public function view()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // this is used to validate request at server side
        $validated = $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required',
        ]);

        $admin_data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('admin')->attempt($admin_data)) {
            return redirect(route('dashboard'));
        } else {
            return redirect(route('admin.login.view'));
        }
    }
}
