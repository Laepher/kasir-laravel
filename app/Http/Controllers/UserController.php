<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Data User',
            'data_user' => User::all(),
        );

        // return view('index',$data);
        return view('admin.master.user.list',$data);
    }

    public function store(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect('/user')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit(Request $request, $id){
        User::where('id', $id) -> where('id', $id) -> update([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect('/user')->with('Success', 'Data Berhasil Ubah');
    }

    public function hapus($id){
        User::where('id', $id) -> delete();
        return redirect('/user')->with('Success', 'Data Berhasil Dihapus');
    }
}
