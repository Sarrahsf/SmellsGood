<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function create() //digunakan untuk menampilkan form untuk menambahkan data
	{
		$data['produk'] = \DB::table('t_produk')
		->get();
		return view('user/formorder', $data);
	}
	
	public function store(Request $request) //digunakan untuk menyimpan data ke dalam database
	{
		$rule=[
			'nama'=> 'required',
			'harga'=> 'required',
		];
		
		$this->validate ($request, $rule);
		
		$input = $request->all();
		unset($input['_token']);
		$status=\DB::table('order')->insert($input);
		
		if ($status){
			return redirect ('/transaksi')->with ('success', 'Data berhasil ditambahkan');
			} else {
			return redirect ('/order/create')->with ('error', 'Data gagal ditambahakan'); }
	}
}
