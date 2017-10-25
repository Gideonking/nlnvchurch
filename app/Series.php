<?php

namespace App;

class Series extends Model
{
  public function videos()
  {
    return $this->hasMany(Video::class);
  }
}
