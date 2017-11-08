<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bulletin;

class NewsController extends Controller
{
  public function index()
  {
    $bulletins = Bulletin::recentBulletins();
    return view('news.index', compact('bulletins'));
  }
}
