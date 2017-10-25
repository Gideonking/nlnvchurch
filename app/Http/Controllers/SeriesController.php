<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Series;
use Carbon\Carbon;

class SeriesController extends Controller
{
    public function show(Series $series)
    {
      $section_title = $series->title . ' 시리즈';
      $messages = $series->videos;
      $message_date = Carbon::parse($messages->first()->video_date);
      $message_date = $message_date->toFormattedDateString();

      return view('series/show', compact('messages', 'message_date', 'section_title'));
    }
}
