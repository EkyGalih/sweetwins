<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.dashboard');
    }

    public function login(){
    	return view('auth.login');
    }

    public function postLogin(Request $request){
		if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
			$credentials = [
				'email' => $request->email,
				'password' => $request->password
			];
		} else {
			$credentials = [
				'username' => $request->email,
				'password' => $request->password
			];
		}

		$user = User::where('username', '=', $request->email)->orWhere('email', '=', $request->email)->first();

		if (Auth::attempt($credentials, $request->remember_token)) {
			if ($user->level == 'admin') {
				return Redirect::to(env('ADMIN'));
			} elseif ($user->level == 'user') {
				return Redirect::to(env('USER'));
			}
			return redirect()->route('login');
		}

		return redirect()->back()->with(['failed' => 'login gagal, pastikan email atau username dan password anda benar'])->withInput($request->all());
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
