<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
	{
		$data['produk'] = \DB::table('t_produk')
		->get();
		return view('user/formproduk', $data);
	} 

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$data = \DB::table('t_produk')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('user/formproduk',['produk' => $data]);
 
	}
}
