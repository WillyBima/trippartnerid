<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
  protected $table = 'Admin';

  protected $fillable =
  [
    'nama_lengkap',
    'user_name',
    'password',
    'user_level',
  ];
}
