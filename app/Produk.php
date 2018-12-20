<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'tbl_produk';
    protected $fillable = ['token_produk','nama_produk','deskripsi','warna','model','stok','harga','status','gambar'];
}
