<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;
    protected $table = 'table_transaksi';
    protected $fillable = [
        'no_transaksi',
        'nama_produk',
        'harga1',
        'stok1',
        'tgl_transaksi',
        'total_bayar',
        'bayar',
        'kembalian',
    ];

    const CREATED_AT = 'created_at';
    const UPDATD_AT = 'updated_at';
}
