<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class loginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
    
        if (Auth::check()) {
           
            return redirect('/');
            
        }else{
            return view('/login');
        }
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
        else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
            };



        // $data = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password'),
        // ];
            
        // if (Auth::attempt($data)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('/');
        // }else{
        //     Session::flash('error', 'Email atau Password Salah');
        //     return redirect('/login');
        // };
    }
        // if (Auth::Attempt($data)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('superadmin/product');
        

}
