<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;



class LoginController extends Controller
{
    public function vue(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        try{
            if(!Auth::check()){
                $credentials = $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);
                
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    toastr()->success("messages",'connexion reussit');
                    return redirect()->route('home');
                }
        
                return redirect()->route('login')->with('email','verifier votre email et le mot de passe');
            } else {
                return redirect()->route('home');
            } 
        }catch (\Exception $e){
            toastr()->error("messages",'error');
        }          
    }

    public function logout() {
        Auth::logout();
        return view('auth.login');
    }
}
