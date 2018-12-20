<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'tbl_penjualan';
    protected $fillable = ['token_penjualan','nama_pembeli','nama_produk','token_cust','kontak','jumlah_barang','harga','total_bayar','status_bayar'];
}
