<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Carbon\Carbon;

class VideoController extends Controller
{
  public function index(Video $video)
  {
    $section_title = '지난 설교 영상';
    $messages = $video->getAllVideosExceptShortVersion();
    $first_message = $messages->first();
    $first_message_date = Carbon::parse($first_message->video_date);
    $first_message_date = $first_message_date->toFormattedDateString();

    $series = $first_message->series;

    return view('messages.index', compact('messages', 'first_message', 'first_message_date', 'section_title', 'series'));
  }

  public function show(Video $message)
  {
    $section_title = '설교 영상';
    $message_date = Carbon::parse($message->video_date);
    $message_date = $message_date->toFormattedDateString();
    $series = $message->series;

    return view('messages.show', compact('message', 'message_date', 'series'));
  }
}
