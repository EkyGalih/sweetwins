<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Produk extends Model
{
    protected $table = 'produk';
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string)Uuid::generate(4);
        });
    }
}
