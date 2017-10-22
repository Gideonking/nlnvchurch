@extends('layouts.master')

@section('content')

  <div class="home__container home__message clearfix">
    <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
      <h2 class="home__message-title">{{ $message_date }}</h2>
      <iframe class="home__message-iframe" width="100%" height="500" src="https://www.youtube.com/embed/{{ $messages[0]->video_id }}?rel=0" frameborder="0" allowfullscreen></iframe>
      <hr class="divider divider--green">
      <div class="home__message-desc text-center kor-main">
        <p>{!! implode('<p class="text-center">', array_filter(explode("\n", $messages[0]->video_description))) !!}</p>
      </div>
    </div>
  </div>

  <div class="messages__container messages__container--dark clearfix">
    <div class="col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1 text-center">
      <h2 class="nlnv__heading">지난 설교 영상</h2>
      <hr class="divider divider--green">
    </div>
    <div class="col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1">
      @foreach($messages as $message)
          <div class="col-sm-6 col-md-4 messages__card">
            <a class="js-lazy messages__card-inner messages__video-link @if ($loop->first) messages__card-inner--active @endif" data-src="https://i.ytimg.com/vi/{{ $message->video_id }}/maxresdefault.jpg" href="{{ $message->video_id }}">
              <p class="messages__card-date kor-main">{{ date_format(date_create($message->video_date), "M j, Y") }}</p>
              <div class="messages__card-content">
                <p class="messages__card-desc kor-main text-center">{!! implode('<p class="messages__card-desc kor-main text-center">', array_filter(explode("\n", $message->video_description))) !!}</p>
                <p class="messages__card-status kor-main text--darkgreen">재생중</p>
              </div>
            </a>
          </div>
      @endforeach
    </div>
  </div>

@endsection
