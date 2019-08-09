<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
	{
		$data['produk'] = \DB::table('t_produk')
		->get();
		return view('shop/formshop', $data);
	}
	public function create() //digunakan untuk menampilkan form untuk menambahkan data
	{
		return view('shop/form');
	}
	
	public function store(Request $request) //digunakan untuk menyimpan data ke dalam database
	{
		$rule=[
			'nama'=> 'required',
			'photo'=> 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'harga'=> 'required',
		];
		
		$this->validate ($request, $rule);
		
		$input = $request->all();
		unset($input['_token']);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('photo');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'uploads';
		$file->move($tujuan_upload,$nama_file);

		$status=\App\Shop::create([
			'nama'=> $request->nama,
			'photo'=> $nama_file,
			'harga'=> $request->harga,
		]);
		
		if ($status){
			return redirect ('/shop')->with ('success', 'Data berhasil ditambahkan');
			} else {
			return redirect ('/shop/create')->with ('error', 'Data gagal ditambahakan'); }
	}
	
		public function edit(Request $request, $id) //digunakan untuk mengedit data melalui form
	{
		$data['shop'] = \DB::table('t_produk')->find($id);
		return view ('shop/form', $data);
	}
	
	public function update (Request $request, $id) //untuk mengupdate data yang sudah di edit
	{
		$rule=[
			'nama'=> 'required',
			'photo'=> 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'harga'=> 'required',
		];
		$this->validate ($request, $rule);
		
		$input = $request->all();
		unset($input['_token']);
		unset($input['_method']);
		
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('photo');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'uploads';
		$file->move($tujuan_upload,$nama_file);

		//$status=\DB::table('t_produk') ->where('id',$id)->update($input);
		$status=\App\Shop::update([
			'nama'=> $request->nama,
			'photo'=> $nama_file,
			'harga'=> $request->harga,
		]);
		
		if ($status){
			return redirect ('/shop')->with ('success', 'Data berhasil diubah');
			} else {
			return redirect ('/shop/create')->with ('error', 'Data gagal diubah'); }
	}
	
	public function destroy (Request $request, $id)
	{
		$status = \DB::table('t_produk')->where('id', $id)-> delete();
		if ($status) {
			return redirect('shop')->with('success', 'Data berhasil dihapus');
		} else {
			return redirect('/shop/create')->with('error', 'Data gagal dihapus');
		}
	}
    
}
