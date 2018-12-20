<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'tbl_komentar';
    protected $fillable = ['token_komentar','nama','komentar','kontak','rating','gambar'];
}
