<?php

namespace App;

class Video extends Model
{
    public function addNewVideo($video_id)
    {
      Video::create([
        'video_id' => $video_id
      ]);
    }
}
