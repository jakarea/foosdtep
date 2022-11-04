<?php

namespace App\Http\Controllers\Auth;

use App;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use Auth;
use Response;
use Session;
use Hash;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Admin Controller
    public function adminloginform()
    {
        echo  __('messages.welcome');
        echo __('messages.title');
        exit;
        App::setLocale('en');
        return view('auth/login');
    }

    // Customer Login Form
    public function showloginform() {
        return view('frontend/customer/login');
    }
    // Customer Register Form
    public function showregisterform() {
        return view('frontend/customer/register');
    }

    // Customer Login
    public function logincustomer(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true) ) {
            // if(Auth::user()->auth_role == 3)
            // {
                $notification = session()->flash("success", "Login Successfull!");

                return redirect()->route('customer.dashboard')->with($notification);
            // }
            
        }
        return back()->withInput($request->only('email', 'remember'))->withErrors(
            [
                'email' => 'Email or Password doesn\'t matched in our database!',
            ]
        );
    }


    // Logout redirection
    public function logout()
    {
        Auth::logout();
        $notification = session()->flash("success", "Logout Success");
        return redirect('/customer/login')->with($notification);
    }
}
