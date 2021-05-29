<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Penjualan;
use App\User;
use Illuminate\Support\Facades\Auth;

class PenjualanController extends Controller
{
	public function index(){
		$penjualan = Penjualan::all();
		return view('penjualan.daftar', compact('penjualan'));
	}

    public function beli($token_produk, $id){
		$user = User::where('id', '=', Auth::user()->id)
		->select(
			'user.id as user_id',
			'user.*'
		)
		->first();
    	$beli = Produk::where('token_produk', '=', $token_produk)
		->select(
			'id as produk_id',
			'produk.*'
		)
		->where('id', '=', $id)
		->first();
    	return view('penjualan.beli', compact('beli', 'user'));
    }

    public function store(Request $beli){
    	$total = $beli->harga * $beli->jumlah_barang;
		$b = $beli->all();
    	$b['token_penjualan'] = date('dmys').str_random(99);
		$b['total_bayar'] = $total;
		$date = date('dmys');
		$token = 'SWTW-'.str_random(32).$date;
		$b['token_cust'] = $token; 
		Penjualan::create($b);
		return view('penjualan.nota', compact('token'));    	

    }
}
