<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showSignup(){
        return view('auth.signup');
    }

    public function registerUser(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $request->validate([
            'name' => 'required|max:100|string',
            'email' => 'required|max:100|string',
            'password'=>'required|max:100|string',
        ]);
        User::create([
            'name'=>$name,
            'email'=>$email,
            'password' => bcrypt($password),
        ]);
        return view('auth.login')->with('status','New User registered');
    }
    public function showLogin(){
        return view('auth.login');
    }

    public function loginUser(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        
        $request->validate([
            'email' => 'required|max:100|string',
            'password'=>'required|max:100|string',
        ]);
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect('products');
        }else{
            return redirect('login');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
