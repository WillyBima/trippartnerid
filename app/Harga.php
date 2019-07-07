<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harga extends Model
{
  protected $table = 'harga';

  protected $fillable =
  [
    'nama_bus',
    'rute_bus',
    'harga',
  ];
}
