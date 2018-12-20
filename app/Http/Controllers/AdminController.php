<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.dashboard');
    }

    public function login(){
    	return view('auth.login');
    }

    public function postLogin(Request $lo){
    	$l = $lo->all();
    	if (Auth::attempt(['username' => $l['username'], 'password' => $l['password']])) {
    		return redirect()->intended('home');
    	} else {
    		return back()->with('fail', 'username atau password salah');
    	}
    }

    public function regis(){
    	return view('auth.regis');
    }

    public function register(Request $re){
    	$r = $re->all();
    	$r['token_user'] = date('dmys').str_random(99);
    	$r['password'] = Hash::make($r['password']);
    	$file = $re->file('gambar');
    	if ($file == NULL) {
    		$filename = $file->getClientOriginalName();
    		$file->move('upload/user',$filename);
    		$r['gambar'] = 'upload/user/'.$filename;
     	}else{
     		$r['gambar'] = 'upload/user/default.jpg';
     	}
     	User::create($r);
     	return redirect('login');
    }

    public function users(){
    	$user = User::all();
    	return view('admin.users', compact('user'));
    }

    public function store(Request $user){
    	$u = $user->all();
    	$u['token_user'] = date('dmys').str_random(99);
    	$u['password'] = Hash::make($u['password']);
    	$file = $user->file('gambar');
    	if ($file == NULL) {
    		$filename = $file->getClientOriginalName();
    		$file->move('upload/user',$filename);
    		$u['gambar'] = 'upload/user/'.$filename;
     	}else{
     		$u['gambar'] = 'upload/user/default.jpg';
     	}
     	User::create($u);
     	return redirect('users');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('login');
    }
}
