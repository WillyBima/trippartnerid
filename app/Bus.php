<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model{

    protected $table = 'bus';

    protected $fillable =
    [
      'nama_po',
      'jenis_bus',
      'nama_bus',
      'slug',
      'gambar_bus'
    ];

}
