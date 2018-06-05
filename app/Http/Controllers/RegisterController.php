<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\user;
use DB;
class RegisterController extends Controller
{
	public function getRegister()
	{
		$title = 'Form Register';
		return view('register.form_register',compact('title'));
	}
	public function postRegister(Request $request){
		$user = new User();
		$user->create([
			'kontak'			=> $request->kontak,
			'alamat'			=> $request->alamat,
			'name'			=> $request->name,
			'email'			=> $request->email,
			'username'  => $request->username,
			'password'  => bcrypt($request->password),
			'hak_akses' => 'user'
		]);
		return redirect()->back()->with('sukses','Registrasi Berhasil!');
	}
}