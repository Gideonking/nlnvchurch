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
