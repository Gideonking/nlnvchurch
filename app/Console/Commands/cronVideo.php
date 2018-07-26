<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Video;

class cronVideo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'new:video';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Youtube new video';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Video $video)
    {
      $curl = curl_init();

      curl_setopt_array($curl, array(
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_URL => 'https://www.googleapis.com/youtube/v3/activities?key=' . env('GOOGLE_API_KEY') . '&channelId=UCdmLI5xDRzZmNVAch8HCyGg&part=contentDetails,snippet&order=date&maxResults=4'
      ));

      $res = curl_exec($curl);
      curl_close($curl);

      $latest_videos = Video::orderBy('id', 'desc')->limit(5)->pluck('video_id')->toArray();
      $youtube_results = json_decode($res, true);
      $youtube_videos = $youtube_results['items'];

      foreach ($youtube_videos as $youtube_video) {
        $youtube_video_type = $youtube_video['snippet']['type'];
        $youtube_video_id = $youtube_video['contentDetails']['upload']['videoId'];
        $youtube_video_title = $youtube_video['snippet']['title'];
        $youtube_video_description = str_replace("http://www.nlnvchurch.org", "", $youtube_video['snippet']['description']);
        $youtube_video_date = substr($youtube_video['snippet']['title'], 0, 8);
        if ($youtube_video_type === 'upload' && !in_array($youtube_video_id, $latest_videos) && strpos($youtube_video_title, '5min') === false) {
          $video->addNewVideo(
            $youtube_video_id,
            $youtube_video_description,
            $youtube_video_date
          );
        }
      }
    }
}
