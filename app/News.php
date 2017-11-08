<?php

namespace App;

class News extends Model
{
  public static function getAllActive()
  {
    return News::where('active', 1)->latest()->get();
  }
  public static function getFeatured()
  {
    return News::where([
      ['featured', '=', 1],
      ['active', '=', 1],
    ])->latest()->limit(3)->get();
  }
}
