<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Po extends Model
{
    protected $table = 'po';

    protected $fillable =
    [
      'nama_po',
      'gambar_po',
      'slug'
    ];
}
