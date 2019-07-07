<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasBus extends Model
{
    protected $table = 'fasilitas_bus';

    protected $fillable =
    [
      'id_bus',
      'id_fasilitas'
    ];
}
