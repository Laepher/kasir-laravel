<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kasir;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){

        $barang = Barang::all();
        $data = array(
            'title' => 'Kasir',
            'barang' => $barang,
            'data_kasir' => Kasir::all(),
        );

        // return view('index',$data);
        return view('kasir.transaksi.list',$data);
    }
}
