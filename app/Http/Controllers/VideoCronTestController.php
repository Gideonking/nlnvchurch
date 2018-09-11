<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoCronTestController extends Controller
{
    public function test(Video $video)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://www.googleapis.com/youtube/v3/activities?key=' . env('GOOGLE_API_KEY') . '&channelId=UCdmLI5xDRzZmNVAch8HCyGg&part=contentDetails,snippet&order=date&maxResults=2'
        ));

        $res = curl_exec($curl);
        curl_close($curl);

        $latest_videos = Video::orderBy('id', 'desc')->limit(5)->pluck('video_id')->toArray();
        $youtube_results = json_decode($res, true);
        $youtube_videos = $youtube_results['items'];

        $full_id = null;
        $is_saved_5min = false;
        $youtube_video_id_5min = null;
        $youtube_video_description_5min = null;
        $youtube_video_date_5min = null;

        foreach ($youtube_videos as $youtube_video) {
            global $full_id;
            global $is_saved_5min;
            global $youtube_video_id_5min;
            global $youtube_video_description_5min;
            global $youtube_video_date_5min;
            
            $youtube_video_type = $youtube_video['snippet']['type'];
            $youtube_video_id = $youtube_video['contentDetails']['upload']['videoId'];
            $youtube_video_title = $youtube_video['snippet']['title'];
            $youtube_video_description = str_replace("http://www.nlnvchurch.org", "", $youtube_video['snippet']['description']);
            $youtube_video_date = substr($youtube_video['snippet']['title'], 0, 8);

            if ($youtube_video_type === 'upload' && !in_array($youtube_video_id, $latest_videos) && strpos($youtube_video_title, '5min') === false) {
                $videoCreated = $video->addNewVideo(
                    $youtube_video_id,
                    $youtube_video_description,
                    $youtube_video_date,
                    2,
                    null
                );
        
                $full_id = $videoCreated->id;
            } elseif ($youtube_video_type === 'upload' && !in_array($youtube_video_id, $latest_videos) && !$full_id && strpos($youtube_video_title, '5min') > 0) {
                $is_saved_5min = true;
                $youtube_video_id_5min = $youtube_video_id;
                $youtube_video_description_5min = $youtube_video_description;
                $youtube_video_date_5min = $youtube_video_date;
            } elseif ($youtube_video_type === 'upload' && !in_array($youtube_video_id, $latest_videos) && $full_id && strpos($youtube_video_title, '5min') > 0) {
                $video->addNewVideo(
                    $youtube_video_id,
                    $youtube_video_description,
                    $youtube_video_date,
                    1,
                    $full_id
                );
            }
        }

        if ($is_saved_5min && $full_id) {
            $video->addNewVideo(
                $youtube_video_id_5min,
                $youtube_video_description_5min,
                $youtube_video_date_5min,
                1,
                $full_id
            );
        }
    }
}
