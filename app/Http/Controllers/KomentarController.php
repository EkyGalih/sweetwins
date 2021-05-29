<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use App\User;
use File;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{

	public function index(){
		$komentar = Komentar::all();
		return view('komentar.komentar', compact('komentar'));
	}

    public function store(Request $komentar){
    	$k = $komentar->all();
		$user_id = User::where('id', '=', Auth::user()->id)->select('id as user_id')->first();
		$k['user_id'] = $user_id->user_id;
    	$file = $komentar->file('gambar');
    	$k['token_komentar'] = date('dmys').str_random(99);
    	Komentar::create($k);
    	return redirect()->back();
    }

    public function destroy($id){
    	$k = Komentar::find($id);
    	File::delete(public_path($k->gambar));
    	$k->delete();
    	return redirect('komentar');
    }
}
