<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use File;

class KomentarController extends Controller
{

	public function index(){
		$komentar = Komentar::all();
		return view('komentar.komentar', compact('komentar'));
	}

    public function store(Request $komentar){
    	$k = $komentar->all();
    	$file = $komentar->file('gambar');
    	$k['token_komentar'] = date('dmys').str_random(99);
    	if ($file != null) {
    		$filename = $file->getClientOriginalName();
    		$file->move('upload/komentar', $filename);
    		$k['gambar'] = 'upload/komentar/'.$filename;
    	}else{
    		$k['gambar'] = 'upload/komentar/default.jpg';
    	}
    	Komentar::create($k);
    	return redirect('/');
    }

    public function destroy($id){
    	$k = Komentar::find($id);
    	File::delete(public_path($k->gambar));
    	$k->delete();
    	return redirect('komentar');
    }
}
