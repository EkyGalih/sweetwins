<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use File;
use Ramsey\Uuid\Uuid;

class ProdukController extends Controller
{
    public function index(){
    	$produk = Produk::select('id as produk_id', 'produk.*')->orderBy('id','desc')->get();
    	return view('produk.daftar', compact('produk'));
    }

    public function store(Request $produk){
    	$p = $produk->all();
    	$p['token_produk'] = date('dmys').str_random(99);
    	$p['warna'] = implode(",", $produk['warna']);
    	$file = $produk->file('gambar');
    	if ($file != null) {
    		$filename = $file->getClientOriginalName();
    		$file->move('upload/produk',$filename);
    		$p['gambar'] = 'upload/produk/'.$filename;
    	}else{
    		$p['gambar'] = 'upload/produk/default.jpg';
    	}
    	Produk::create($p);
    	return redirect()->route('produk-admin');
    }

	public function show($id){
		$detail_produk = Produk::select('id as produk_id', 'produk.*')->where('id', '=', $id)->first();
		return view('produk.detail_produk', compact('detail_produk'));
	}

    public function update(Request $produk, $id){
    	$p = $produk->all();
        $p['warna'] = implode(",", $produk['warna']);
        $file = $produk->file('gambar');
        $before = Produk::find($id);
        if ($file != null) {
            File::delete(public_path($before->gambar));
            $filename = $file->getClientOriginalName();
            $file->move('upload/produk',$filename);
            $p['gambar'] = 'upload/produk/'.$filename;
        }
		Produk::find($id)->update($p);
		return redirect()->route('produk-admin');
    }

    public function destroy($id){
    	$p = Produk::find($id);
    	File::delete(public_path($p->gambar));
    	$p->delete();
    	return redirect()->route('produk-admin')->with(['success' => 'Produk Berhasil Dihapus!']);
    }
}
