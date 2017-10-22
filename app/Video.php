<?php

namespace App;

class Video extends Model
{
    public function addNewVideo($id, $desc, $date)
    {
      Video::create([
        'video_id' => $id,
        'video_description' => $desc,
        'video_date' => $date
      ]);
    }

    public function latestVideo()
    {
      return Video::all()->last();
    }
}
