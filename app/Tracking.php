<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
  protected $table = 'tracking';

  protected $fillable =
  [
    'id_bus',
    'id_supir',
    'latitude',
    'longitude'
  ];
}
