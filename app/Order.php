<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable =
    [
      'nama',
      'email',
      'no_hp',
      'nama_bus',
      'harga',
      'alamat_jemput',
      'alamat_tujuan',
      'tanggal_pergi',
      'tanggal_pulang',
      'status'
    ];
}
