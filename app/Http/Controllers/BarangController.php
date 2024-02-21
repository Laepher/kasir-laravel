<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Data Barang',
            'data_barang' => Barang::all(),
        );

        // return view('index',$data);
        return view('admin.master.barang.list',$data);
    }

    public function store(Request $request){
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/barang')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit(Request $request, $id){
        Barang::where('id', $id) -> where('id', $id) -> update([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/barang')->with('Success', 'Data Berhasil Ubah');
    }

    public function hapus($id){
        Barang::where('id', $id) -> delete();
        return redirect('/barang')->with('Success', 'Data Berhasil Dihapus');
    }
}
