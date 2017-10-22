<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Carbon\Carbon;

class VideoController extends Controller
{
  public function index(Video $video)
  {
    $messages = $video->getAllVideos();

    // $youtube_video_thumbnail = $youtube_result['snippet']['thumbnails']['high']['url'];
    // https://i.ytimg.com/vi/VIDEOID!!!/hqdefault.jpg
    // "width": 480,
    // "height": 360,

    return view('pages/messages', compact('messages'));
  }

  public function store(Video $video)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://www.googleapis.com/youtube/v3/activities?key=' . env('GOOGLE_API_KEY') . '&channelId=UCdmLI5xDRzZmNVAch8HCyGg&part=contentDetails,snippet&order=date&maxResults=1'
    ));

    $res = curl_exec($curl);
    curl_close($curl);
    $youtube_results = json_decode($res, true);
    $youtube_result = $youtube_results['items'][0];

    $youtube_video_activity = $youtube_result['snippet']['type'];

    if ($youtube_video_activity === 'upload') {
      $youtube_video_id = $youtube_result['contentDetails']['upload']['videoId'];
      $youtube_video_description = str_replace("http://www.nlnvchurch.org", "", $youtube_result['snippet']['description']);
      $youtube_video_date = substr($youtube_result['snippet']['title'], 0, 8);

      $video_id = Video::pluck('video_id')->last();

      if ($youtube_video_id !== $video_id)
      {
        $video->addNewVideo(
          $youtube_video_id,
          $youtube_video_description,
          $youtube_video_date
        );
      }
    }
  }
}
