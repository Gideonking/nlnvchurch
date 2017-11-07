<?php

namespace App;

class News extends Model
{
  public static function getFeatured()
  {
    return News::where('featured', 1)->latest()->get();
  }
}
