<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Bulletin extends Model
{
  public static function recentBulletins()
  {
    $nowInLA = Carbon::today('America/Los_Angeles');
    return Bulletin::latest()->limit(8)->where('created_at', '<', $nowInLA)->get();
  }

  public static function getAllBulletins()
  {
    $nowInLA = Carbon::today('America/Los_Angeles');
    return Bulletin::latest()->where('created_at', '<', $nowInLA)->get();
  }
}
