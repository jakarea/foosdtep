<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Role;
use App\Models\UserRole;
use Auth;
use Response;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    // Register Form
    public function showRegistrationForm()
    {
        return view('frontend/customer/register');
    }

    // Registration Customer Account
    public function CustomerRegistration(Request $request)
    {
        $validation =   $request->validate([
            'name'          =>  ['required', 'string', 'unique:users,name', 'max:255'],
            'email'         =>  ['required', 'email', 'unique:users,email', 'max:255'],
            'password'      =>  ['required', 'string', 'min:6','regex:/[a-z]/','regex:/[A-Z]/','regex:/[0-9]/','regex:/[@$!%*#?&]/'],
        ]);


        if( !empty($request->all() ) )
        {
            $user = User::create([
                'name'   =>  $request->name,
                'email'   =>  $request->email,
                'password'   =>  Hash::make($request->password),
            ]);
    
            UserRole::create([
                'user_id'   =>  $user->id,
                'role_id'   =>  3,
            ]);

            $notification = session()->flash("success", "Account Created Successfull!");
            return redirect()->route('customer.loginform')->with($notification);
        }
        else {
            $notification = session()->flash("error", "Data Not Found");
            return back()->with($notification);
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
