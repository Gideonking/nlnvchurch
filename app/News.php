<?php

namespace App;

class News extends Model
{
  public function getFeatured()
  {
    return News::where('featured', 1)->latest()->get();
  }
}
