<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index(){

        $barang = Barang::all();

        $id_barang = request('id');
        $detail = Barang::find($id_barang);

        $data = array(
            'title' => 'Kasir',
            'barang' => $barang,
            'detail' => $detail,
            'data_kasir' => Kasir::all(),
        );

        // return view('index',$data);
        return view('kasir.tampil.list',$data);
    }
}
