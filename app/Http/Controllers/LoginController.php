<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('index');
    }

    // public function loginproses(Request $request){

    //     $credentials = [
    //         'name' => $request->name,
    //         'password' => $request->password,
    //     ];

    //     if(Auth::attempt($credentials)){
    //         return redirect('/home')->with('Success', 'Login Berhasil');
    //     }

    //     return back()->with('error', 'Login Gagal');
    // }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function loginproses(Request $req){
        $data = DB::table('users')
        ->where(function ($query) use ($req) {
            $query->where('name', '=', $req->name);
        })
        ->first(['id', 'role', 'password']);

    if ($data && Hash::check($req->password, $data->password)) {
        $req->session()->put('user_id', $data->id);
        $req->session()->put('role', $data->role);

        if ($data->role == 'kasir') {
            return redirect('/kasir');
        } elseif ($data->role == 'admin') {
            return redirect('/user');
        } else {
            return redirect('/')->with('gagal', 'Akun Anda Tidak Terdaftar');
        }
    } else {
        return redirect('/')->with('gagal', 'Akun Anda Tidak Terdaftar');
    }
    }
}
