<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Komentar extends Model
{
    protected $table = 'komentar';
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model){
            $model->id = (string)Uuid::generate(4);
        });
    }
}
