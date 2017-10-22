<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Carbon\Carbon;

class WelcomeController extends Controller
{
  public function index(Video $video)
  {
    $ytvid = $video->latestVideo();

    if ($ytvid !== NULL)
    {
      $ytvid_time = Carbon::parse($ytvid->video_date);
      $ytvid_time = $ytvid_time->toFormattedDateString();
      $ytvid_description = '<p>' . implode('</p><p>', array_filter(explode("\n", $ytvid->video_description))) . '</p><p>' . $ytvid_time . '</p>';
    }

    return view('pages/index', compact('ytvid', 'ytvid_description'));
  }
}
