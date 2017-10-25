<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Carbon\Carbon;

class VideoController extends Controller
{
  public function show(Video $video)
  {
    $section_title = '지난 설교 영상';
    $messages = $video->getAllVideos();
    $first_message = $messages->first();
    $first_message_date = Carbon::parse($first_message->video_date);
    $first_message_date = $first_message_date->toFormattedDateString();

    $series = $first_message->series;

    return view('messages/show', compact('messages', 'first_message', 'first_message_date', 'section_title', 'series'));
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
