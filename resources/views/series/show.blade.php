@extends('layouts.master')

@section('content')

  <div class="home__container home__message clearfix text-center">
    <h2 class="nlnv__heading">{{ $section_title }}</h2>
    <hr class="divider divider--green margin-bottom-lg">
    <div class="col-md-6 col-md-offset-0 col-lg-5 col-lg-offset-1 margin-top-sm margin-bottom-lg">
      <iframe class="home__message-iframe home__message-iframe--sm" width="100%" height="500" src="https://www.youtube.com/embed/{{ $messages[0]->video_id }}?rel=0" frameborder="0" allowfullscreen></iframe>
      <hr class="divider divider--green">
      <div class="home__message-desc text-center kor-main">
        <p>{!! implode('<p class="text-center">', array_filter(explode("\n", $messages[0]->video_description))) !!}</p>
      </div>
    </div>
    <div class="col-md-6 col-lg-5 text-center">
      @foreach($messages as $message)
          <div class="col-sm-6 col-md-12 col-lg-6 messages__card">
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
