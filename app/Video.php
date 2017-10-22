<?php

namespace App;

class Video extends Model
{
    public function addNewVideo($id, $thumbnail, $desc, $date)
    {
      Video::create([
        'video_id' => $id,
        'video_thumbnail' => $thumbnail,
        'video_description' => $desc,
        'video_date' => $date
      ]);
    }

    public function latestVideo()
    {
      return Video::all()->last();
    }
}
