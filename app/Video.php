<?php

namespace App;

class Video extends Model
{
    public function addNewVideo($id, $desc, $date, $series, $full)
    {
      $videoCreated = Video::create([
        'video_id' => $id,
        'video_description' => $desc,
        'video_date' => $date,
        'series_id' => $series,
        'full_id' => $full
      ]);

      return $videoCreated;
    }

    public function getAllVideos()
    {
      return Video::orderBy('id', 'desc')->get();
    }

    public function getAllVideosExceptShortVersion()
    {
      return Video::orderBy('id', 'desc')->whereNotIn('series_id', [1])->get();
    }

    public function latestVideo()
    {
      return Video::all()->last();
    }

    public function latestLongVideo()
    {
      return Video::all()->whereNotIn('series_id', [1])->last();
    }

    public function latestShortVideo()
    {
      return Video::all()->whereIn('series_id', [1])->last();
    }

    public function series()
    {
      return $this->belongsTo(Series::class);
    }
}
