<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index(Video $video)
    {
      $curl = curl_init();

      curl_setopt_array($curl, array(
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_URL => 'https://www.googleapis.com/youtube/v3/search?key=' . env('GOOGLE_API_KEY') . '&channelId=UCdmLI5xDRzZmNVAch8HCyGg&part=snippet,id&order=date&maxResults=1'
      ));

      $res = curl_exec($curl);
      curl_close($curl);
      $youtube_results = json_decode($res, true);
      $youtube_video_id = $youtube_results['items'][0]['id']['videoId'];

      $video_id = Video::pluck('video_id')->last();

      var_dump($youtube_video_id . ' and ' . $video_id);

      if ($youtube_video_id !== $video_id)
      {
        $video->addNewVideo($youtube_video_id);
      }
    }
}
