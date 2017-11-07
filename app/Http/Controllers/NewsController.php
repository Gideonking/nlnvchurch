<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
  public function index(News $news)
  {
    return view('news.index');
  }
}
