<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Transaksi;
use App\DetailTransaksi;
use App\Konsumen;
use Auth;

use DB;
class TransaksiController extends Controller
{
    public function zona_waktu($lokasi){
		return date_default_timezone_set($lokasi);
	}
    public function transaksi(){
        $this->zona_waktu('Asia/Jakarta');
        $user_id 	= Auth::user()->id;
        $user = Auth::user();
        if ($user->hak_akses == 'admin') {
            $transaksis = DB::table("transaksis")
                ->select("transaksis.*","users.username","users.kontak","users.alamat")
                ->join('users', 'transaksis.user_id','=','users.id')
                ->orderBy('status','DESC')->get();
            $total = DB::table("transaksis")
            ->select('total_harga', DB::raw('SUM(total_harga) as total'))
            ->join('users', 'transaksis.user_id','=','users.id')
            // ->sum("total_harga")
            // ->where(['users.id' => $user_id])
            ->get();
            // return $total;
        }else{
            $transaksis = DB::table("transaksis")
                ->select("transaksis.*","users.*")
                ->join('users', 'transaksis.user_id','=','users.id')
                ->where('users.id', $user_id)
                ->where(['transaksis.status' => 'proses'])
                ->orderBy('transaksis.id')->get();
                $total = DB::table("transaksis")
                ->select('total_harga', DB::raw('SUM(total_harga) as total'))
                ->join('users', 'transaksis.user_id','=','users.id')
                ->where(['transaksis.status' => 'proses'])
                ->where(['users.id' => $user_id])
                ->get();
        }

        $data = array(
            'title'     => 'Data Transaksi',
            'no'        => 1,
            'transaksis'=> $transaksis,
            'total'     => $total,
            'user_id'   => $user_id
        );
        return view('transaksi.index',$data);
    }
    public function postTransaksi(Request $request){
        $user_id 		= Auth::id();
        $this->zona_waktu('Asia/Jakarta');
        $transaksi = new Transaksi();
		$transaksi->create([
			'jenis_barang'  => $request->jenis_barang,
			'berat_baju'    => $request->berat_baju,
			'total_harga'   => $request->berat_baju * 5000,
			'tanggal'	    =>  date('Y-m-d'),
			'user_id'       => $user_id
		]);
		return redirect()->back()->with('sukses','Transaksi Berhasil! Kami Akan Segera memproses Transaksi Anda, Terimakasih :) ');
    }
    public function ubahStatus(Request $request){
        $id = $request->id;
        Transaksi::where(['id' =>  $id])->update([
    			'status'	=> 'Lunas'
    		]);
    		return redirect()->back()->with(['sukses' => 'Terimakasih! Anda Sudah Mengisi Absen Keluar Hari ini']);
     
    }
    public function history(){
        $user_id 	= Auth::user()->id;
        $transaksis = DB::table("transaksis")
                ->select("transaksis.*","users.*")
                ->join('users', 'transaksis.user_id','=','users.id')
                ->where('users.id', $user_id)
                ->orderBy('transaksis.id','DESC')->get();
        $total = DB::table("transaksis")
                ->select('total_harga', DB::raw('SUM(total_harga) as total'))
                ->join('users', 'transaksis.user_id','=','users.id')
                // ->sum("total_harga")
                ->where(['users.id' => $user_id])
                ->get();
                // return $total;
        $data = [
            'title' => 'History Transaksi '.Auth::user()->name,
            'transaksis' => $transaksis,
            'total' => $total,
            'no'    => 1
        ];
        return view('transaksi.history',$data);
    }
}
