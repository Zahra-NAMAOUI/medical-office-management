<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class login extends Controller
{
    public function index(){
        return view('espace_doctor.login');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        $email=$request->input('email');
        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();
            return redirect()->route('admin.index')->with('success','Connecter avec succés '.$email.'.');
        } else {
        return back()->withErrors(['email' => 'Email ou mot de passe incorrect.'])->onlyInput('email');
            
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login.index')->with('success','**Vous étes bien déconnecter');

    }
}
