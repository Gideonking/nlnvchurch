<?php

namespace App;

class Album extends Model
{
  public function photos()
  {
    return $this->hasMany(Photo::class);
  }
}
