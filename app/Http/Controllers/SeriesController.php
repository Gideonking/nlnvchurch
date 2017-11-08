<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;
use App\Video;
use Carbon\Carbon;

class SeriesController extends Controller
{
  public function index()
  {
    $section_title = '설교 시리즈';
    $series = Series::latest()->get();
    $first_message = Video::latest()->first();
    $first_message_date = Carbon::parse($first_message->video_date);
    $first_message_date = $first_message_date->toFormattedDateString();

    return view('series.index', compact('series', 'section_title', 'first_message', 'first_message_date'));
  }

  public function show(Series $series)
  {
    $section_title = $series->title . ' 시리즈';
    $messages = $series->videos;
    $message_date = Carbon::parse($messages->first()->video_date);
    $message_date = $message_date->toFormattedDateString();

    return view('series.show', compact('messages', 'message_date', 'section_title'));
  }
}
