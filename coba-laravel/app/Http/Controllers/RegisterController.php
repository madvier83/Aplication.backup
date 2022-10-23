<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'active' =>'register'
        ]);
    }
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|min:3|max:255',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:8|max:255'
        ]);
        // dd($request);
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Regristration success');
        return redirect('/login')->with('success', 'Regristration success');
    }
}
