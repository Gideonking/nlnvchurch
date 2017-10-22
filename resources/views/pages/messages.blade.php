@extends('layouts.master')

@section('content')

  <div class="home__container home__message clearfix">
    <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
      <h2 class="home__message-title">주일 설교영상</h2>
      <iframe class="home__message-iframe" width="100%" height="500" src="https://www.youtube.com/embed/{{ $messages[0]->video_id }}?rel=0" frameborder="0" allowfullscreen></iframe>
      <hr class="divider divider--green">
      <div class="home__message-desc text-center kor-main">
        {!! implode('</p><p class="text-center">', array_filter(explode("\n", $messages[0]->video_description))) !!}
      </div>
    </div>
  </div>

  @foreach($messages as $message)
    <div class="col-md-2 messages__card">
      <div class="col-xs-12">
        <a class="messages__video-link" href="{{ $message->video_id }}">
         <img src="https://i.ytimg.com/vi/{{ $message->video_id }}/maxresdefault.jpg" alt="">
        </a>
      </div>
      <div class="col-xs-12">
        <p class="text-center">
          {!! implode('</p><p class="text-center">', array_filter(explode("\n", $message->video_description))) !!}
        </p>
      </div>
    </div>
  @endforeach

@endsection
