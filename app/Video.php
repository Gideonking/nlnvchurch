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

    public function getAllVideos()
    {
      return Video::orderBy('id', 'desc')->get();
    }

    public function latestVideo()
    {
      return Video::all()->last();
    }

    public function series()
    {
      return $this->belongsTo(Series::class);
    }
}
