<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public $table = 't_produk';

    protected $fillable = [
        'nama', 'photo', 'harga',
    ];
}
