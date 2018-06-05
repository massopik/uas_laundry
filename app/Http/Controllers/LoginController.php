<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\user;
class LoginController extends Controller
{
    public function getLogin()
    {
        $title = 'Form Login';
        return view('login.form_login',compact('title'));
    }
    public function postLogin(Request $request){
        $user = NEW User;
        if(Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])){
            return redirect('/home');
        }else{
            return redirect()->back()->with('gagal','Username atau password anda salah');
        }
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
