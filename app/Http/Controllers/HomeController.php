<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Data User',
            'data_user' => User::all(),
            'data_barang' => Barang::all(),
        );
        return view('layout.home', $data);
    }
}
