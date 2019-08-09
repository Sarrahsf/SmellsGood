<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
	{
		$data['order'] = \DB::table('order')
		->get();
		return view('user/formtransaksi', $data);
	}
}
