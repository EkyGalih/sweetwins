<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class SweetwinsController extends Controller
{
    public function about(){
    	return view('sweetwins.tentang');
    }

    public function all_produk(){
    	$produk = Produk::orderBy('id','desc')->limit(21)->get();
    	return view('sweetwins.all_produk', compact('produk'));
    }

    public function welcome(){
    	$produk = Produk::all();
    	$produk2 = Produk::orderBy('id','desc')->limit(3)->get();
    	return view('welcome', compact('produk','produk2'));
    }
}
