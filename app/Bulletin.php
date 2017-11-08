<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
  public static function recentBulletins()
  {
    return Bulletin::latest()->limit(6)->get();
  }

  public static function getAllBulletins()
  {
    return Bulletin::latest()->get();
  }
}
