<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\user;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function dashboard()
    {
        $user = Auth::user();
        // $cek = $user->where(['hak_akses'=>'admin'])->get()->first();
        // return $user;
        if($user->hak_akses == 'admin'){
            // echo 'ini admin';
            $title = 'dashboard admin';
            return view('dashboard',compact('user','title'));
        }else{
            // echo 'ini user';
            $title = 'dashboard user';
            return view('dashboard',compact('user','title'));
        }
    }
}
