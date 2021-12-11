<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;

class AuthController extends Controller
{
    function index(){
        if(\session('login')){
            return redirect('/');
        }
        return view('auth.login');
    }
    public function login_user(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        
            // dd($user);
        
        if (Auth::attempt($credentials)) {
            $user = DB::table('users as A')
            ->join('role as B', 'A.role_id', '=', 'B.id')
            ->select('a.email', 'a.password', 'b.roles')
            ->where('A.email', $credentials['email'])
            ->first();
            // dd($user->roles);
            Session::put('email', $credentials['email']);
            Session::put('login', TRUE);
            Session::put('roles', $user->roles);

            return redirect()->intended('/')
                        ->withSuccess('Logged-in');
        }
        return redirect("login")->withSuccess('Credentials are wrong.');
    }

    function register(){
        if(\session('login')){
            return redirect('/');
        }
        return view('auth.register');
    }

    function register_user(Request $request) {
        $request->validate([
            'username' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            're_password' => 'required|min:8',
        ]);
        $data = $request->all();
        if($data['password'] === $data['re_password']) {
            $check = $this->createUser($data);
        }
        return redirect("login")->withSuccess('Successfully registered!');
        // dd($request->all());
    }
    public function createUser(array $data)
    {
      $date_now = date('Y-m-d H:i:s');
      return DB::table('users')->insert([
        'name' => $data['username'],
        'no_hp' => $data['no_hp'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'created_at' => $date_now,
        'updated_at' => $date_now,
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }   
}

