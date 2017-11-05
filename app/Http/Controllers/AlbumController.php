<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
  public function index()
  {
    $albums = Album::latest()->get();

    return view('albums.index', compact('albums'));
  }

  public function show(Album $album)
  {
    $album_title = $album->title;
    $album_url = '/images/albums/' . $album->date . $album->slug . '/';
    $photos = $album->photos;

    return view('albums.show', compact('photos', 'album_title', 'album_url'));
  }
}
