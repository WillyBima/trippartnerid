<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryOrder extends Model
{
  protected $table = 'historyorder';

  protected $fillable =
  [
    'id_order',
    'id_pemesan',
  ];
}
