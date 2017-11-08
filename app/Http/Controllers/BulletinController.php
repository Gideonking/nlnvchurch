<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bulletin;

class BulletinController extends Controller
{
  public function index()
  {
    $bulletins = Bulletin::getAllBulletins();
    return view('bulletins.index', compact('bulletins'));
  }
}
