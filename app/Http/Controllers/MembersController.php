<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MembersController extends Controller
{
     public function index()
	{
		$data['login'] = \DB::table('login')
		->where('sebagai','like',"%".'user'."%")
		->paginate();
		return view('members/formember', $data);
	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$data = \DB::table('login')
		->where('username','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('members/formember',['login' => $data]);
 
	}
}
