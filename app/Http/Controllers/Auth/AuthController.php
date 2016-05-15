<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Requests;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
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
          'firstname' => 'required|max:255',
          'lastname' => 'required|max:255',
          'birthday' => 'required',
          'username' => 'required|min:6|max:255|unique:users',
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function qvalidator(array $data)
    {
        return Validator::make($data, [
          'username' => 'required|min:6|max:255|unique:users',
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
          'firstname' => $data['firstname'],
          'lastname' => $data['lastname'],
          'birthday' => $data['birthday'],
          'username' => $data['username'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
        ]);
    }

    protected function qcreate(array $data)
    {
        return User::create([
          'username' => $data['username'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
        ]);
    }

    protected function quick_register(Request $request)
    {
      $data = $request->all();
      $validator = AuthController::qvalidator($data);
      if ($validator->fails()) {
          return redirect('/home')
                      ->withErrors($validator)
                      ->withInput();
      }
      AuthController::qcreate($data);
      return redirect()->intended('/login')->with('register_message', 'Registration Success');
    }

    protected function register(Request $request)
    {
      $data = $request->all();
      $validator = AuthController::qvalidator($data);
      if ($validator->fails()) {
          return redirect('/register')
                      ->withErrors($validator)
                      ->withInput();
      }
      AuthController::create($data);
      return redirect()->intended('/login')->with('register_message', 'Registration Success');
    }

    // user after login based on its role
    protected function authenticated($request, $user)
    {
      if ($user->admin) {
        return redirect()->intended('/admin');
      }
      return redirect()->intended('/dashboard');
    }


}
