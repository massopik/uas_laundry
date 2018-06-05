<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Konsumen;
use App\User;
use Auth;
use DB;
class KonsumenController extends Controller
{
    public function konsumen(){
        // $konsumen = NEW Konsumen;
        $konsumens = DB::table("users")
            ->select("users.*")
            // ->join('users', 'users.id','=','konsumens.user_id')
            // ->join('guides', 'guides.id','=','bookings.id_guide')
            // ->join('users', 'users.id','=','bookings.id_user')
            ->where('hak_akses','user')
            ->orderBy('users.id')->get();
        // $user_id  = Auth::user()->id;
        // $konsumen = Konsumen::all();
        // dd($konsumens);
        $data = array(
            'title'     => 'Data Konsumen',
            'no'        => 1,
            'konsumens' => $konsumens
        );
        return view('konsumen.index',$data);
    }
}
