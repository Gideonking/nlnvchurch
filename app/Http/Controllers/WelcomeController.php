<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyAo7ScNH3wxU7P21MtOf2weUTpb0a3SHKA&channelId=UCdmLI5xDRzZmNVAch8HCyGg&part=snippet,id&order=date&maxResults=1'
    ));

    $res = curl_exec($curl);
    curl_close($curl);
    $ytresult = json_decode($res, true);
    $ytvidid = $ytresult['items'][0]['id']['videoId'];

    return view('pages/index', compact('ytvidid'));
  }
}
