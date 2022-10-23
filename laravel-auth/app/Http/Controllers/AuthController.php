<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', []);
    }

    public function index() 
    {
        return view('auth.login', []);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withInput()->with('error', 'wrong username or password !');
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        return redirect('/login');
    }

    public function register()
    {   
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|same:cpassword'
        ]);
        $request['password'] = bcrypt($request['password']);

        User::create($request);
        
        return redirect('/login');
    }
}
